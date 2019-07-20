@extends('layouts.master')

@section('scripts-header')

@if (Route::has('login'))
	<header>
		<div class="container-fluid header">
			<div class="container">
				<nav class="row">
					<div class="col-6 text-left">
						<a href="/"><img id="logo" src="{{asset('logo1.png')}}" alt="done"></a>
					</div>
					<div class="col-6">
				@auth
					<a href="/main">Bullet journal</a>
				@else
					<a href="{{ route('login') }}">Connexion</a>

					@if (Route::has('register'))
						<a href="{{ route('register') }}">Inscription</a>
					@endif
				@endauth
				@endif
					<a href="/contact">Contact</a>
					</div>
					
				</nav>
			</div>
		<div>
	</header>
@endsection

@section('content')

<div class="container-fluid text-center">
	<div class="row pt-4 pb-4">
		<h1 class="cst-contact-titre" >Nous contacter</h1>
		<p class="cst-contact-p">Retrouvez toute l'équipe ! </p>
	</div>
</div>   
<div class="container-fluid cst-background">
	<div class="row">
		<div class="col-md-3 text-center pl-5 pt-5">
			
			<h3 class="cst-contact-titre1">Séverine Goulard</h3>
			<p class="cst-contact-p m-0"><strong>Téléphone : </strong> 06.78.09.87.90</p>
			<p class="cst-contact-p m-0"><strong>Email : </strong> sev@done.fr</p>
			<img src="{{URL::asset('sev.png')}}">
		</div>

		<div class="col-md-3 text-center pt-5">
			<img src="{{URL::asset('livre.jpg')}}">
			<h3 class="cst-contact-titre1">Yasine Rachid</h3>
			<p class="cst-contact-p m-0"><strong>Téléphone : </strong> 06.77.19.87.90</p>
			<p class="cst-contact-p"><strong>Email : </strong> yasine@done.fr</p>
		</div>

		<div class="col-md-3 text-center pt-5">
			<h3 class="cst-contact-titre1">Audrey Llavador</h3>
			<p class="cst-contact-p m-0"><strong>Téléphone : </strong> 06.78.09.17.80</p>
			<p class="cst-contact-p"><strong>Email : </strong> audrey@done.fr</p>
			<img src="{{URL::asset('livre.jpg')}}">
		</div>
 
		<div class="col-md-3 text-center pt-5">
			<img class="img-membre-4" src="{{URL::asset('wenndy.png')}}">
			<div class="pt-4">
				<h3 class="cst-contact-titre1">Wenndy Carlier</h3>
				<p class="cst-contact-p m-0"><strong>Téléphone : </strong> 06.09.09.57.90</p>
				<p class="cst-contact-p"><strong>Email : </strong> wenndy@done.fr</p>
			</div>
		</div>
	</div>
</div>


@endsection


@section('scripts-footer')

<div class="container cst-contact-footer mt-5">
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