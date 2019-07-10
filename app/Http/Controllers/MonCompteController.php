<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Auth;
use Redirect;
use Validator;
use Illuminate\Validation\Rule;


class MonCompteController extends Controller
{
    public function index()
    {
    	$user = Auth::user();
   		
    	return view('mon_compte.index')->with('user', $user);
    }

    public function update(Request $request)
    {
    	$data = $request->all();

    	$rules = [
    		'pseudo'	=> 'string|required',
    		'email'		=> 'email|required',
    		'dob' 		=> 'string',
    		'avatar' 	=> 'string'
    	];

    	$validator = Validator::make($data, $rules, [
    			'pseudo.string' 	=> 'Votre pseudo est invalide',
    			'pseudo.required' 	=> 'Votre pseudo est obligatoire',
    			'email.email' 		=> 'Votre email est invalide',
    			'email.required' 	=> 'Votre email est obligatoire',
    			'dob.string' 		=> 'Choisissez votre date de naissance',
    			'avatar.string' 	=> 'Votre fichier image est invalide'
    	]);

    	if($validator->fails()){ 
    		return Redirect::back()
    						->withErrors($validator)
    						->withInput();
    	}

    	$user = User::where('id', $data['id'])->first();
    	$user->pseudo 		= $data['pseudo'];
    	$user->email 		= $data['email'];
    	$user->dob 			= $data['dob'];
    	$user->avatar 		= $data['avatar'];

    	$user->save();

    	return view('/home');

    }
}
