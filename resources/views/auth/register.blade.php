@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1 class="card-header cst-register">REGISTER</h1>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                    <!--Pseudo-->
                            <div class="form-group row">
                                <label for="pseudo" class="col-md-4 col-form-label text-md-right">Pseudo</label>

                                <div class="col-md-6">
                                    <input id="pseudo" type="text" class="form-control @error('name') is-invalid @enderror" name="pseudo" value="{{ old('pseudo') }}" required autocomplete="pseudo" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                    <!--Email-->
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Adresse Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                    <!--Password-->
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                    <!--Password Confirm-->
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmation du mot de passe</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>


                    <!--Date of Birth-->
                                 <div class="form-group row">
                                <label for="dob" class="col-md-4 col-form-label text-md-right">Date de naissance</label>

                                <div class="col-md-6">
                                    <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob">

                                    @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                    <!--City-->
                    <!-- Must be set on "ville" regarding the API-->
                            <div class="form-group row">
                                <label for="ville" class="col-md-4 col-form-label text-md-right">Ville</label>

                                <div class="col-md-6">
                                    
                                    <input id="ville" type="text" class="form-control" name="ville" value="{{ old('ville') }}" required>
                                   
                                       <ul style="position:absolute; z-index:100;">
                                          <li data-vicopo="#ville">
                                            <strong data-vicopo-code-postal></strong>
                                            <span data-vicopo-ville></span>
                                          </li>
                                       </ul>
                                </div>
                            </div>
                    <!--Avatar-->
                     
                             <div class="form-group">
                                <label for="exampleFormControlFile1">Avatar</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                             </div>

                    <!--Theme-->

                            <div class="row cst-template">
                                <div class="col-md-4 form-check form-check-inline cst-check-template">
                                    <img src="{{URL::asset('template1.png')}}" style="width:30%;">
                                    <input class="form-check-input" type="radio" name="theme" id="inlineRadio1" value="theme1">
                                    <label class="form-check-label" for="inlineRadio1">Classic</label>
                                </div>
                                <div class="col-md-4 form-check form-check-inline cst-check-template">
                                    <img src="{{URL::asset('template2.png')}}" style="width:30%;">
                                    <input class="form-check-input" type="radio" name="theme" id="inlineRadio2" value="theme2">
                                    <label class="form-check-label" for="inlineRadio2">Nature</label>
                                </div>
                                <div class="col-md-4 form-check form-check-inline cst-check-template">
                                    <img src="{{URL::asset('template3.png')}}" style="width:30%;">
                                    <input class="form-check-input" type="radio" name="theme" id="inlineRadio3" value="theme3">
                                    <label class="form-check-label" for="inlineRadio3">Espace</label>
                                </div>
                            </div>

                           

                    <!--Sumit Button-->
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-3 mt-4">
                                    <button type="submit" class="btn cst-btn-register">
                                        Valider
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    

<script src="js/api/villes.js"></script>
@endsection
