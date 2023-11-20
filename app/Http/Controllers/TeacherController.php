<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\classroom;
use App\Models\Extracurricular;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    public function index(){
        $teacher = Teacher::all();
        return view('teacher',['teacher'=> $teacher]);
    }

    public function show($id){
        $teachers = Teacher:: with('class.students')-> findOrFail($id);
        return view('teacher-detail',['teachers'=> $teachers]);
    }
     public function create(){
         $class = classroom::select('id','name')->get();
         return view('teachers-add',['class'=>$class]);
         
    }
     public function store(Request $request) {
        $newname = '';
         if ($request->file('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
             $newname = $request->name.'-'.now()->timestamp.'.'.$extension;
              $request->file('photo')->storeAs('photo',$newname);
        }

        $request['image'] = $newname;
        $teachers = Teacher::create($request->all());
         return redirect('/teacher');
     }
     public function Update(Request $request, $id){
        $teachers = Teacher::findOrFail($id);
        $teachers->update($request->all());
        if($teachers){
             Session::flash('status','success');
             Session::flash('Massage','Update data succesfully');
        }
        return redirect('/teacher');
     }
     public function edit(Request $request, $id) {
        $teachers= Teacher::with('class')->findOrFail($id);
        $class = classroom::where('id','!=',$teachers->class_id)-> get(['id','name']);
        return view('teacher-edit',['teacher'=>$teachers,'class'=>$class]);
     }
     public function delete($id) {
        $teachers = Teacher::findOrFail($id);
        return view('teacher-delete',['teacher'=> $teachers]);
   }
   public function destroy($id){
        $teacherdelete = Teacher::findOrFail($id);
        $teacherdelete->delete();
        if ($teacherdelete) {
            Session::flash('status','success');
            Session::flash('massage','delete data succesfully');
            return redirect('teacher');
        }
   }
}
