{{--VIEW ML--}}
@extends('layouts.master')

@section('scripts-header')

@if (Route::has('login'))
	<header>
		<div class=" container-fluid header">
			<div class=" container">
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
			</div>
		<div>
	</header>
@endsection
 
@section('content')
<section>
	<div class="container-fluid">
		<div class="container cst-ml-div">
			<div class="row">
				<div class="col-md-12">
					<h1>mentions légales</h1><br>
<h4 class="text-center">Le DONE Bullet Journal (www.done.fr), est édité par la Team Web Force 3,qui fait partie de la SOCIETE PHILOMATHIQUE DE BORDEAUX.</h4><br>
<p class="text-center">Le siège est situé au 66 Rue Abbé de l'Épée, 33000 Bordeaux. </p>
<p class="text-center">Enregistrée à l'INSEE le 01-01-1900 , sous le numéro 78184288500019. Site Internet : www.philomathiquebordeaux.com</p>
<p class="text-center">Télephone : 05 56 52 23 26</p>
<p class="text-center">Courrier : webmaster@done.fr</p> 
<p class="text-center">Code SIRET : 78184288500019</p> 
<p class="text-center">Forme Juridique : Association loi 1901 ou assimilé</p> 
<p class="text-center">Représentant légal et Directeur : Mr Laurent Bergerot Mr Clément Duqueyrois</p> 
<p class="text-center">La Philomathique de Bordeaux, association reconnue d’utilité publique, est une école de formation aux métiers d’Art, d’Artisanat et du Digital. 
Créée en 1808, elle a depuis contribué à la formation de 118 Meilleurs Ouvriers de France et accueille au cœur de Bordeaux prés de 800 auditeurs par an.</p>
<p>Contactez-nous:</p>
<p class="text-center">WF3 est à votre disposition pour tous vos commentaires ou suggestions.</p>
<p>Vous pouvez nous écrire en français par courrier électronique à : contact@done.fr
Date de dernière modification : 12/07/2019</p> 
				</div>
			</div>
		</div>
	</div>
</section>				




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