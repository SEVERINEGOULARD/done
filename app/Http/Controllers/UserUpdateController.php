<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Redirect; 
use Validator;
use Illuminate\Validation\Rule;

class UserUpdateController extends Controller
{
    public function index(Request $request)
    {
    	$userId = $request->all();

    	$id = $userId['id'];

    	$result = User::where('id', $id)->get(); 

    	return view('userUpdate.index')->with('user', $result);
    }

    public function userUpdate(Request $request)
    {
    	$data = $request->all();

    	$rules = [
    		'pseudo'	=> 'string|required',
    		'email'		=> 'email|required'
    	];

    	$validator = Validator::make($data, $rules, [
    			'pseudo.string' 	=> 'Votre pseudo est invalide',
    			'pseudo.required' 	=> 'Votre pseudo est obligatoire',
    			'email.email' 		=> 'Votre email est invalide',
    			'email.required' 	=> 'Votre email est obligatoire'
    	]);
 
    	if($validator->fails()){ 
    		return Redirect::back()
    						->withErrors($validator)
    						->withInput();
    	}

    	$user = User::where('id', $data['userId'])->first();
    	$user->pseudo 		= $data['pseudo'];
    	$user->email 		= $data['email'];

    	$user->save();
    	
		$users = User::all();
    	return view('admin.index')->with('users', $users);

    }
}
