<!--view userUpdate : modif data user through page admin--> 
<!--données stockées en $user-->
@extends('layouts.master')

@section('scripts-header')
<header class="header">
    <nav>
        <a href="{{ url('/home') }}">Home</a>
        <a href="/main">Bullet journal</a>
    </nav>
</header>
@endsection

@section('content')

<div class="container-fluid">
    <div class="container">
        <div class="cst-cpte-container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="cst-head-compte">Gestion des utilisateurs</h2>
                </div>
            </div>

            <div class="row cst-div-form-compte">
                <div class="col-md-12">
                    <form action="/admin/update" method="POST" class=""> 
                    @csrf 

                      <input type="hidden" name="userId" value="{{$user[0]->id}}">

                      <p>Utilisateur numéro {{$user[0]->id}} :</p>
                      <label for="pseudo">Pseudo</label>
                      <input type="text" name="pseudo" value="{{$user[0]->pseudo}}">
                      @if($errors->has('pseudo'))
                        <strong>{{ $errors->first('pseudo') }}</strong>
                      @endif

                      <label for="email" class="mt-4">Email</label>
                      <input type="text" name="email" value="{{$user[0]->email}}">
                      @if($errors->has('email'))
                        <strong>{{ $errors->first('email') }}</strong>
                      @endif
                    
                    <div class="mt-5 mb-5">
                        <button class="btn cst-btn-compte" type="submit">Modifiez les données</button>
                    </div>

                    </form>
                </div>
            </div>


        </div>
    </div> 
</div>

@endsection

@section('scripts-footer')

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

@endsection
