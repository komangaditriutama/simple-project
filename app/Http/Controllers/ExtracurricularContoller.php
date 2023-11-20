<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ExtracurricularContoller extends Controller
{
    public function index(){
        $ekskul = Extracurricular::get();
        return view('extracurricular',['ekskulList'=> $ekskul]);
    }
    public function show($id){
        $ekskul = Extracurricular::with(['students'])-> findOrFail($id);
        return view('extracurricular-detail',['extracurricular'=> $ekskul]);
    }
    public function create() {
        $ekskul = Extracurricular::select('id','name')->get();
        return view('extracurricular-add',['extracurricular'=>$ekskul]);
    }
    public function store(Request $request){
        $ekskul = Extracurricular::create($request->all());
        if ($ekskul) {
            Session::flash('status','success');
            Session::flash('Massage','add data succesfully');
        } else {
            return redirect('/extracurricular-add');
        };
        return redirect('/extracurricular');
    }
    public function delete($id) {
        $ekskul = Extracurricular::findOrFail($id);
        return view('extracurricular-delete',['extracurricular'=>$ekskul]);
   }
   public function destroy($id){
    $ekskuldelete = Extracurricular::findOrFail($id);
    $ekskuldelete->delete();
    return redirect('/extracurricular');
   }
}