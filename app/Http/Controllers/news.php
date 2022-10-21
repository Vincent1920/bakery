<?php

use App\Models\Post;
use App\Models\posts;

use App\Models\user;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class news extends Controller
{
    public function news(){
        return view('news.news',[
        // 'post'=>post::all(),
        // 'categories'=>categories::all(),
            // 'post'=>posts::all()

        ]);
    }
    
    public function bobnews(){
        return view('news.bobnews');
    }
      
      
}
