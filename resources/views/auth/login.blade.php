@extends('layouts.app') 

@section('content')
<div class="container-fluid">
    <div class="container">
        <h1 class="cst-login-head">Connexion</h1>
    </div>
</div>
    

<div class="container-fluid cst-div-login">
   
            
                <div class="row"> 
                    <div class="col-12">
                        <div class="container">
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <label for="email" class="col-md-4 col-form-label">Votre email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="password" class="col-md-4 col-form-label">Votre mot de passe</label>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                                        
                </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <div class="row">
                                    <div class="col-md-10">
                                        <label class="form-check-label cst-label-log-rem" for="remember">Se souvenir de moi</label>
                                    </div>
                                    <div class="col-md-2 cst-div-rem">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0 container cst-btn-login-div">
                        <button type="submit" class="btn cst-btn-login">
                            Connexion
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Mot de passe oublié ?
                            </a>
                        @endif
                    </div>
                </form>
            
      
</div>

<div class="container-fluid cst-contact-footer mt-5">
 <div class="row cst-row-login-footer">
   <div class="col-md-4 text-center">
     <a href="/ml">Mentions légales</a>
   </div>
   <div class="col-md-4 text-center">
     <p>Copyright 2019 - AWSY</p>
   </div>
   <div class="col-md-4 text-center">
     <a href="/cgu">CGU</a>
   </div>
 </div>
</div>
@endsection
