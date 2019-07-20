<?php

namespace App\Http\Controllers\Auth;

use App\Model\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Redirect;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/main';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        
    
    $message = [
            'pseudo.required'        => "Votre pseudo est obligatoire",
            'pseudo.min'             => "Votre pseudo doit contenir au minimum 8 caractères",
            'pseudo.alpha'           => "Votre pseudo ne doit pas contenir de caractères spéciaux",
            'pseudo.max'             => "Votre pseudo est trop long",
            'email.required'         => "Votre email est obligatoire",
            'email.email'            => "Veuillez renseigner une adresse email valide",
            'email.max'              => "Votre email est trop long",
            'email.unique'           => "Cette adresse est déjà utilisée",
            'password.required'      => "Votre mot de passe est obligatoire",
            'password.confirmed'     => "Vos mots de passe ne sont pas identiques",
            'password.min'           => "Votre mot de passe doit contenir au minimum 8 caractères",
        
            'avatar.image'           => "Votre avatar doit être une image",
            'avatar.max'             => "Votre fichier est trop volumineux"

        ];
        return Validator::make($data, [
                'pseudo'         => ['required','max:255','min:8'],
                'email'          => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password'       => ['required', 'min:8', 'confirmed'],
                'avatar'         => ['nullable', 'image', 'max:10000'],

        ],
            $message
        );
       
                                      
    }

    /**
    * Display errors messages
    *
    * @param Request  $request
    * return error's redirection
    */

    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {   session()->flash('bienvenue', 'Bienvenue sur votre journal');
        return User::create([
            'pseudo'        => $data['pseudo'],
            'email'         => $data['email'],
            'password'      => Hash::make($data['password']),
            'dob'           => $data['dob'],
            'avatar'        => $data['avatar'], 
        ]);
    }
}
