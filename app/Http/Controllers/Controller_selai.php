<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Environment\Runtime;

class Controller_selai extends Controller
{
    public function index(){
        return view( 'selai\selai');
    }
}
