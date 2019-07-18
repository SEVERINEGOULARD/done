<!--vue mon_compte-->

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
    <div class="row">
        <div class="col-md-12">
            <h1 class="cst-head-compte">Vos données personnelles</h1>
        </div>
    </div>
    <div class="row cst-div-form-compte">
        <div class="col-md-12">
            <form action="/mon_compte" method="POST" class="cst-form-compte"> 
                @csrf 
                <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="container">
                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input class="form-control" type="text" name="pseudo" required value="{{ $user->pseudo }}">
                    @if($errors->has('pseudo'))
                    <strong>{{ $errors->first('pseudo') }}</strong>
                    @endif
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" required value="{{ $user->email }}">
                    @if($errors->has('email'))
                    <strong>{{ $errors->first('email') }}</strong>
                    @endif
                </div>

                <div class="form-group">
                    <label for="dob">Date de naissance</label>
                    <input class="form-control" type="date" name="dob" required value="{{ $user->dob }}">
                    @if($errors->has('dob'))
                    <strong>{{ $errors->first('dob') }}</strong>
                    @endif
                </div>

                <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <p>{{ $user->avatar }}</p>
                    <input class="form-control" type="file" name="avatar" value="{{ $user->avatar }}" accept="image/png, image/jpeg">
                    @if($errors->has('avatar'))
                    <strong>{{ $errors->first('avatar') }}</strong>
                    @endif
                </div>
            </div>    

            <div class="cst-div-btn-compte container mt-5 mb-5">
                <button class="btn cst-btn-compte" type="submit">Modifiez vos données</button>
            </div>
            </form>
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