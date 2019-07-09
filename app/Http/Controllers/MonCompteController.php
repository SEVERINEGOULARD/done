<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;

class MonCompteController extends Controller
{
    public function index(){
   
    	$user = User::where('id', session('id'));

    	return view('mon_compte.index')->with('user', $user);
    }
}
