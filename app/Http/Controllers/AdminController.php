<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }
    public function index()
    {	
    	$users = User::all();
    	return view('admin.index')->with('users', $users);
    }

    public function deleteUser(Request $request)
    {
    	$userId = $request->all();  
    	DB::table('users')->where('id', $userId['id'])->delete(); 
    	return redirect()->route('admin');
    }
}
 