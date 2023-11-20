<?php

namespace App\Http\Controllers;
use App\Models\classroom;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClassController extends Controller
{
    public function index(){
        $class = classroom::get();
        return view('classroom',['classList'=> $class]);
    }
    public function show($id) {
        $class = classroom::with(['students','teacher'])->
             findOrFail($id);
        return view('class-detail',['class'=> $class]);
   }
   public function create(){
    $teacher = Teacher::select('id','name')->get();
    $class = classroom::select('id','name')->get();
    return view('class-add',['class'=> $class, 'teacher'=>$teacher]);
   }
public function store(Request $request) {
    $class = classroom::create($request->all());
    if ($class) {
        Session::flash('status','success');
        Session::flash('Massage','add data succesfully');
    } else {
        return redirect('/extracurricular-add');
    };
    return redirect('/classroom');
}
}
