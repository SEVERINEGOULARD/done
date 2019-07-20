@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="row pb-3">
            <h1>Inscription</h1>
        </div>
    </div>
    <div class="row justify-content-center cst-bg-register">
        <div class="col-md-8">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
                @endif
                  
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!--Pseudo-->
                    <div class="form-group row">
                        <label for="pseudo" class="col-md-4 col-form-label">Pseudo</label>
                            <input id="pseudo" type="text" class="cst-input form-control @error('name') is-invalid @enderror" name="pseudo" value="{{ old('pseudo') }}" required autocomplete="pseudo" autofocus>
                    </div>         
                    <!--Email-->
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label">Adresse Email</label>
                            <input id="email" type="email" class="cst-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">      
                    </div>

                    <!--Password-->
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label">Mot de passe</label>
                            <input id="password" type="password" class="cst-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    </div>

                    <!--Password Confirm-->
                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label">Confirmation du mot de passe</label>
                            <input id="password-confirm" type="password" class="cst-input form-control" name="password_confirmation" required autocomplete="new-password">  
                    </div>


                    <!--Date of Birth-->
                    
                    <div class="form-group row">
                        <label for="dob" class="col-md-4 col-form-label">Date de naissance</label><br>
                    </div>    
                    <div class="row">
                        <input id="dob" type="date" class="input-date-register cst-input form-control @error('dob') is-invalid @enderror" name="dob">
                    </div>

                    <!--Avatar-->
                     
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Avatar</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="avatar">
                    </div>

                   
                    <div class="mt-5 mb-5 text-right">
                        <button id="btn-submit-register" type="submit" class="btn cst-btn-register">Valider</button>
                    </div>
                
            </form>
        </div>
    </div>
</div>



<div class="container-fluid cst-contact-footer mt-5">
 <div class="row">
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


<script src="js/api/villes.js"></script>
@endsection
