<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Model\Week;
Use App\Model\UserWeek;
use Auth;
use Session;

class MainController extends Controller
{
    

    public function index(){
    	return view('main.index');
    }

    public function calendar(Request $request){
    	$data = $request->all();
    }

    public function selectWeek(Request $request){

       
    	$data = $request->all();

        $weekId = Week::where('week_number', $data['id'])->first();

        $user = Auth::user();
        $result = UserWeek::where('week_id', $weekId['id'])->where('user_id', $user->id);
        $userWeek = $result->get();

    	echo json_encode($userWeek);

    }

    public function insertDrop(Request $request){
        $data = $request->all();

        $user = Auth::user();
        $userWeek = new UserWeek();
        $userWeek->zone_id    = $data['zone'];
        $userWeek->module_id  = $data['module'];
        $userWeek->user_id    = $user->id;
        $userWeek->week_id    = $data['weekId'];
        $userWeek->save();
        echo json_encode($user);
    }
}
