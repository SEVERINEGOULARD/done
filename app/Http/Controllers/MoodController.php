<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoodController extends Controller
{

	/**
     * Show the application mood tracker.
     *
     * 
     */
    public function index(){
    	return view('mood.index');
    }
}
