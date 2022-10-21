<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class logincontroller extends Controller
{   
  public function login ()
  {
    return view('login.login',[
      'title'=>'login',
    ]);
  }

 public function authenticate( Request $request)
 {
   $credentials = $request->validate([
     // :dns
     'email'=>'required | email', 
     'password'=>'required',
    ]);
    // return Auth::attempt($credentials);
  //  return redirect()->intended('/dashboard');
 
  if (Auth::attempt($credentials)) {
    return redirect()->intended('/dashboard');
    $request->session()->regenerate(); 
  }

  return back()->with('loginerror','login failed!!') ;
  // dd ('berhasil');
// tamba captcha untuk login
// tambah category
// tambah userr di dashbord
}
public function logout ()
  {
    Auth::logout();
      request()->session()->invalidate();
      request()->session()->regenerateToken();
      return redirect('/');
  }

   
}
  


