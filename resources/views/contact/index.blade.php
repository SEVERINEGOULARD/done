@extends('layouts.master')

@section('scripts-header')

@if (Route::has('login'))
	<header class="header">
	    <nav>
	    @auth
	        <a href="{{ url('/home') }}">Home</a>
	        <a href="/main">Bullet journal</a>
	    @else
	        <a href="{{ route('login') }}">Connexion</a>

	        @if (Route::has('register'))
	            <a href="{{ route('register') }}">Inscription</a>
	        @endif
	    @endauth
		@endif
		</nav>
	</header>
@endsection

@section('content')

<div class="container-fluid pl-5">
	<div class="row pt-4 pb-4">
    	<h1>Nous contacter</h1>
	</div>
</div>   
<div class="container-fluid cst-background">
	<div class="row">
		<div class="col-md-6 pt-3 pl-4">
			<p>Show Purposes
	See full vendor list
	Powered byQuantcast - GDPR Consent Solution
	Հայերեն Shqip ‫العربية‫العربية   Български Català 中文简体 Hrvatski Česky Dansk Nederlands English Eesti Filipino Suomi Français ქართული Deutsch Ελληνικά ‫עברית‫עברית   हिन्दी Magyar Indonesia Italiano Latviski Lietuviškai македонски Melayu Norsk Polski Português Româna Pyccкий Српски Slovenčina Slovenščina Español Svenska ไทย Türkçe Українська Tiếng Việt
	Lorem Ipsum
	"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
	"Il ny a personne qui naime la souffrance pour elle-même, qui ne la recherche et qui ne la veuille pour elle-même..."
	Qu'est-ce que le Lorem Ipsum?
	Le Lorem Ipsum est simplement du faux texte employé dans la com</p>
		<p>Email : done@done.fr</p>
		</div>
		<div class="col-md-6">
			<div class="cst-contact-img">
				<img src="{{URL::asset('contact.png')}}">
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