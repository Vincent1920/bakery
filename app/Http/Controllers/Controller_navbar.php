<?php

namespace App\Http\Controllers;
use App\Models\posts;
use App\Models\post;
use App\Models\user;
use Illuminate\Http\Request;


class Controller_navbar extends Controller
{
    // public function index(){
    //     return view('templates.navbar');
      
    //   }
      public function bob(){
        return view('home.home',[
          'posts' => posts::all()
        ]);
      
      }
      
      

      public function menu(){
       return view('menu.menu',[
        // 'post'=>posts::first(),
        'posts'=>posts::all(),

        // dd($posts)
       ]);
  
      }
      // halam dashboard
      public function dashboard(){
        return view('dashboard.main');
    }
    

}