<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Model\Week;
Use App\Model\UserWeek;
use Auth;
use Session;
use DB;

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

        //$weekId = Week::where('week_number', $data['id'])->first();

        $user = Auth::user();
        $result = UserWeek::where('week_id', $data['number'])->where('user_id', $user->id);
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
        echo json_encode($userWeek);
    }

    public function updateTextModule(Request $request){

       $request->validate([

       'text' => 'max:5000',

       ]);

       $data = $request->all();
       UserWeek::where('id', $data['line-id'])->update(['content' => $data['text']]);
       return response()->json();
   }

   public function uploadImageModule(Request $request){

       $request->validate([

           'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

       ]);

       $path = $request->file('image')->store('UserImages');
       UserWeek::where('id', $request->get('line-id'))->update(['content' => $path]);
       return response()->json(['state' => $path, 'id' => $request->get('line-id')]);
   }

   public function insertDesignModule(Request $request){


       $request->validate([

       'design' => 'required',

       ]);

       $data = $request->all();

   }
   public function deleteModule(Request $request){

       $data = $request->all();
       DB::table('users_weeks')->where('id', $data['id'])->delete();
       echo json_encode($data);
    }

    public function insertMoods(Request $request){
      dd($request);
    }
}

