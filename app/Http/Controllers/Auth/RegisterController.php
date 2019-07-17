<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/home';

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
            'pseudo'         => ['required', 'alpha', 'max:255','min:8'],
            'email'          => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'       => ['required', 'min:8', 'confirmed'],
            'ville'          => ['string'],
            'avatar'         => ['image', 'max:10000'],
            'theme'          => ['string']

                                      ],
            $message);
       
                                      
    }

    /**
    * Display errors messages
    *
    * @param Request  $request
    * return error's redirection
    */

    //on a trouvé cette fonction native à laravel qui permet de retourner des messages d'error personnalisés à la place des messages d'erreur de laravel en anglais (vendor\laravel\framework\src\Illuminate\Foundation\Auth)

    public function register(Request $request)
    {  
        $validator = $this->validator($request->all());
        
        if ($validator->fails()) {
            return redirect('/register')
            ->withErrors($validator)
            ->withInput();
        }

        event(new Registered($user = $this->create($request->all())));
        $this->guard()->login($user);
        return redirect($this->redirectPath());
    }

      
    



    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {   dd($data);
    
        $user = User::create([
            'pseudo'        => $data['name'],
            'email'         => $data['email'],
            'password'      => Hash::make($data['password']),
            'dob'           => $data['dob'],
            'ville'         => $data['ville'],
            'avatar'        => $data['avatar'],
            'template_id'   => $data['theme']    

        ]);

        $user->save();
       
    }
}
