<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Model\Week;
Use App\Model\UserWeek;
use Auth;

class MainController extends Controller
{
    public function index(){
    	return view('main.index');
    }

    public function calendar(Request $request){
    	$data = $request->all();
    	dd($data);
    }
    public function selectWeek(Request $request){

       
    	 $data = $request->all();
         $weekId = Week::where('week_number', $request->id)->first();

         $user = Auth::user();
         $result = UserWeek::where('week_id', $weekId['id']);
                                //->where('user_id', $user->id);
         $userWeek = $result->get();



    	 echo json_encode($userWeek);


    }
}
