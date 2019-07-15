<!--vue admin-->
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
                <form action="/" method="POST" class=""> 
                    @csrf 
                    <input type="hidden" name="" value="">

                <div class="form-group">
                    <label for="pseudo">??</label>
                    
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
      <a href="">Mentions légales</a>
    </div>
    <div class="col-md-4 text-center">
      <p>Copyright 2019 - AWSY</p>
    </div>
    <div class="col-md-4 text-center">
      <a href="">CGU</a>
    </div>     
  </div>
</div>

@endsection
