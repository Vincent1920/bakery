<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class logincontroller extends Controller
{   
  public function login ()
  {
    return view('login.login',[
      'title'=>'login',
    ]);
  }

  public function reloadCaptcha()
  {
      return response()->json(['captcha'=> captcha_img()]);
  }

 public function authenticate( Request $request)
 {
   $credentials = $request->validate([
     // :dns
     'email'=>'required | email', 
     'password'=>'required',
     'captcha' => ['required','captcha'],
    ]);
    // dd ($credentials);
  //    validator([
   
  //     'captcha' => ['required','captcha'],
  // ]);

  if (Auth::attempt($credentials)) {
    return redirect()->intended('/dashboard');
    $request->session()->regenerate(); 
  }

  return back()->with('loginerror','login failed!!') ;
}
// tamba captcha untuk login
// tambah category
// tambah userr di dashbord
public function logout ()
  {
    Auth::logout();
      request()->session()->invalidate();
      request()->session()->regenerateToken();
      return redirect('/');
  }

   
}
  


