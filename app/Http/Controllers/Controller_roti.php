<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_roti extends Controller
{
    public function index(){
        return view('menu.menu');
    
    }
    
}

