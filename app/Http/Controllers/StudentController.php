<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student_Create_Request;
use App\Models\classroom;
use App\Models\Student;
use App\Models\Extracurricular;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
     public function index(Request $request){
          $searching = $request->searching;
         $student = Student::with('class')->
         where('name','LIKE', '%'.$searching.'%')->
         orWhere('gender',$searching)->
         orWhere('nis','LIKE','%'.$searching.'%')->
         orWhereHas('class', function($query) use($searching) {
          $query->where('name','LIKE','%'.$searching.'%');
         })
         ->simplePaginate(5);
              return view('student',['studentList'=> $student]);
 
     }
     public function show($id) {
          $student = Student::with(['class.teacher','extracurriculars'])
               ->findOrFail($id);
          return view('student-detail',['student'=> $student]);
     }
    
     public function create(){
          $class = classroom::select('id','name')->get();
          $ekskul = Extracurricular::select('id','name')->get();
          return view('students-add',['class'=>$class,'extracurricular'=>$ekskul]);
     }
     public function store(Student_Create_Request $request){
          // dd($request->all());
          $newname = '';
          if ($request->file('photo')) {
              $extension = $request->file('photo')->getClientOriginalExtension();
               $newname = $request->name.'-'.now()->timestamp.'.'.$extension;
                $request->file('photo')->storeAs('photo',$newname);
          }

          $request['image'] = $newname;
           $students = Student::create($request->all());
           if($students){
               Session::flash('status','success');
               Session::flash('Massage','add data succesfully');
            }
           return redirect('/students');
     }
     public function edit(Request $request,$id) {
          $students = Student::with('class')->findOrFail($id);
          $class = classroom::where('id','!=',$students->class_id)-> get(['id','name']);
          return view('students-edit',['students'=>$students,'class'=>$class]);
     }
     public function update(Request $request,$id) {
          $students = Student::findOrFail($id);
          $students->update($request->all());
          if($students){
               Session::flash('status','success');
               Session::flash('Massage','Update data succesfully');
          }
          return redirect('/students');
          
     }
     public function delete($id) {
          $students = Student::findOrFail($id);
          return view('student-delete',['students'=> $students]);
     }
    public function destroy($id){
      $studentdelete = Student::findOrFail($id);
      $studentdelete->delete();
      if($studentdelete){
          Session::flash('status','success');
          Session::flash('Massage','delete data succesfully');
     }
      return redirect('/students');
    }

    public function DeletedStudent(){
          $studentdeleted = Student::onlyTrashed()->get();
          return view('student-deleted-list',['student' => $studentdeleted]);
    }
    public function restore($id){
          $studentdeleted = Student::withTrashed()->where('id',$id)->restore();
          if($studentdeleted){
               Session::flash('status','success');
               Session::flash('Massage','restore data succesfully');
          }
          return redirect('/students');
         
    }
}
