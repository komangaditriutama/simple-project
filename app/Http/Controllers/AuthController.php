<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()  {
        return view('login');
    }

    public function authenticating(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/home');
        }

        Session::flash('status','failed');
        Session::flash('Massage','Login gagal');
        return redirect('/login');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/login');
    }
    public function createregister(){
        $role = Role::select('id','name')->get();
        return view('register',['role'=>$role]);
   }
    public function registerstore(Request $request){
        $users = User::create($request->all());
        return redirect('/login');  
    }

}
