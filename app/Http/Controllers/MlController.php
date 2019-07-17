<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MlController extends Controller
{
    public function index(){
    	return view('ml.index');
    }
}
