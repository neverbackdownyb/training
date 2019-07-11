<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlController extends Controller
{
    
    public function education(){
    	return view('education');
    }
    public function modal(){
    	return view('modal');
    }
}
