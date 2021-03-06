<!-- @extends('layouts.master')

@section('scripts-header')
<header class="header">
    <nav>
        <a href="{{ url('/home') }}">Home</a>
        <a href="/main">Bullet journal</a>
	</nav>
</header>
@endsection 

@section('content')-->

<div class="container-fluid">
	<div class="container">
		<div class="row cst-row-mood">
			<div class="col-md-1 offset-md-3">
				<p class="cst-p-mood text-center">lundi</p>
			</div>
			<div class="col-md-1">
				<p class="cst-p-mood text-center">mardi</p>
			</div>
			<div class="col-md-1">
				<p class="cst-p-mood text-center">mercredi</p>
			</div>
			<div class="col-md-1">
				<p class="cst-p-mood text-center">jeudi</p>
			</div>
			<div class="col-md-1">
				<p class="cst-p-mood text-center">vendredi</p>
			</div>
			<div class="col-md-1">
				<p class="cst-p-mood text-center">samedi</p>
			</div>
			<div class="col-md-1">
				<p class="cst-p-mood text-center">dimanche</p>
			</div>
		</div>
		<div class="row"><!--zones moods-->
			<div id="mood-1" class="cst-mood col-md-1 offset-md-3" style="background-image:url('/what.jpg'); background-size: cover ; background-position: center">
				
			</div>
			<div id="mood-2" class="cst-mood col-md-1" style="background-image:url('/what.jpg'); background-size: cover ; background-position: center">
				
			</div>
			<div id="mood-3" class="cst-mood col-md-1" style="background-image:url('/what.jpg'); background-size: cover ; background-position: center">
				
			</div>
			<div id="mood-4" class="cst-mood col-md-1" style="background-image:url('/what.jpg'); background-size: cover ; background-position: center">
				
			</div>
			<div id="mood-5" class="cst-mood col-md-1" style="background-image:url('/what.jpg'); background-size: cover ; background-position: center">
				
			</div>
			<div id="mood-6" class="cst-mood col-md-1" style="background-image:url('/what.jpg'); background-size: cover ; background-position: center">
				
			</div>
			<div id="mood-7" class="cst-mood col-md-1" style="background-image:url('/what.jpg'); background-size: cover ; background-position: center">
				
			</div>
		</div>

		<div class="row">
			<div class="row">
				<div class="col-md-1 offset-md-3">
					<form>
						<div class="form-group cst-div-select">
							<label for="select-choice-mood" class="cst-label-choice">Humeur du jour</label>
						<select class="form-control cst-select-mood" id="select-choice-mood1">
							<option>X</option>
							<option>Heureux</option>
							<option>Energique</option>
							<option>Enervé</option>
							<option>Fatigué</option>
							<option>Malade</option>
							<option>Triste</option>
							<option>Inquiet</option>
						</select>
						</div>
					</form>
				</div>
				<div class="col-md-1">
					<form>
						<div class="form-group cst-div-select">
							<label for="select-choice-mood" class="cst-label-choice">Humeur du jour</label>
						<select class="form-control cst-select-mood" id="select-choice-mood2">
              <option>X</option>
							<option>Heureux</option>
							<option>Energique</option>
							<option>Enervé</option>
							<option>Fatigué</option>
							<option>Malade</option>
							<option>Triste</option>
							<option>Inquiet</option>
						</select>
						</div>
					</form>
				</div>
				<div class="col-md-1">
					<form>
						<div class="form-group cst-div-select">
							<label for="select-choice-mood" class="cst-label-choice">Humeur du jour</label>
						<select class="form-control cst-select-mood" id="select-choice-mood3">
              <option>X</option>
							<option>Heureux</option>
							<option>Energique</option>
							<option>Enervé</option>
							<option>Fatigué</option>
							<option>Malade</option>
							<option>Triste</option>
							<option>Inquiet</option>
						</select>
						</div>
					</form>
				</div>
				<div class="col-md-1">
					<form>
						<div class="form-group cst-div-select">
							<label for="select-choice-mood" class="cst-label-choice">Humeur du jour</label>
						<select class="form-control cst-select-mood" id="select-choice-mood4">
              <option>X</option>
							<option>Heureux</option>
							<option>Energique</option>
							<option>Enervé</option>
							<option>Fatigué</option>
							<option>Malade</option>
							<option>Triste</option>
							<option>Inquiet</option>
						</select>
						</div>
					</form>
				</div>
				<div class="col-md-1">
					<form>
						<div class="form-group cst-div-select">
							<label for="select-choice-mood" class="cst-label-choice">Humeur du jour</label>
						<select class="form-control cst-select-mood" id="select-choice-mood5">
              <option>X</option>
							<option>Heureux</option>
							<option>Energique</option>
							<option>Enervé</option>
							<option>Fatigué</option>
							<option>Malade</option>
							<option>Triste</option>
							<option>Inquiet</option>
						</select>
						</div>
					</form>
				</div>
				<div class="col-md-1">
					<form>
						<div class="form-group cst-div-select">
							<label for="select-choice-mood" class="cst-label-choice">Humeur du jour</label>
						<select class="form-control cst-select-mood" id="select-choice-mood6">
              <option>X</option>
							<option>Heureux</option>
							<option>Energique</option>
							<option>Enervé</option>
							<option>Fatigué</option>
							<option>Malade</option>
							<option>Triste</option>
							<option>Inquiet</option>
						</select>
						</div>
					</form>
				</div>
				<div class="col-md-1">
					<form>
						<div class="form-group cst-div-select">
							<label for="select-choice-mood" class="cst-label-choice">Humeur du jour</label>
						<select class="form-control cst-select-mood" id="select-choice-mood7">
              <option>X</option>
							<option>Heureux</option>
							<option>Energique</option>
							<option>Enervé</option>
							<option>Fatigué</option>
							<option>Malade</option>
							<option>Triste</option>
							<option>Inquiet</option>
						</select>
						</div>
					</form>
				</div>
			</div>

		</div>
		
	</div>
</div>




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
<script>
$(function(){

/*Affichage des moods au chargement*/




    });
  

</script>





<!-- @endsection -->