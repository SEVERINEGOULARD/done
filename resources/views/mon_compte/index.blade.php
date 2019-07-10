<!--vue mon_compte-->

@extends('layouts.master')

@section('content')

<form action="/mon_compte" method="POST">
        @csrf 
        <fieldset>
            <legend>Vos données personnelles</legend>

                
                <input type="hidden" name="id" value="{{ $user->id }}">

                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" name="pseudo" required value="{{ $user->pseudo }}">
                    @if($errors->has('pseudo'))
                        <strong>{{ $errors->first('pseudo') }}</strong>
                    @endif
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" required value="{{ $user->email }}">
                    @if($errors->has('email'))
                        <strong>{{ $errors->first('email') }}</strong>
                    @endif
                </div>

                <div class="form-group">
                    <label for="dob">Date de naissance</label>
                    <input type="date" name="dob" required value="{{ $user->dob }}">
                    @if($errors->has('dob'))
                        <strong>{{ $errors->first('dob') }}</strong>
                    @endif
                </div>

                 <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <div>{{ $user->avatar }}</div>
                    <input type="file" name="avatar" value="{{ $user->avatar }}" accept="image/png, image/jpeg">
                    @if($errors->has('avatar'))
                        <strong>{{ $errors->first('avatar') }}</strong>
                    @endif
                </div>


            <button type="submit">Modifiez vos données</button>
        </fieldset>
    </form>


@endsection