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
		<div class="row">
			<div id="mood-1" class="cst-mood col-md-1 offset-md-3">
				
			</div>
			<div id="mood-2" class="cst-mood col-md-1">
				
			</div>
			<div id="mood-3" class="cst-mood col-md-1">
				
			</div>
			<div id="mood-4" class="cst-mood col-md-1">
				
			</div>
			<div id="mood-5" class="cst-mood col-md-1">
				
			</div>
			<div id="mood-6" class="cst-mood col-md-1">
				
			</div>
			<div id="mood-7" class="cst-mood col-md-1">
				
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


<script>
$(function(){

	$('#select-choice-mood1').change(function(){
		var mood = $('#select-choice-mood1').val();
		switch (mood){
  			case 'Heureux':
  				$('#mood-1').css('background', '#8cfc8c');
  			break;
  			case 'Energique':
  				$('#mood-1').css('background', '#f5f681');
  			break;
  			case 'Enervé':
  				$('#mood-1').css('background', '#f86464');
  			break;
  			case 'Fatigué':
  				$('#mood-1').css('background', '#858383');
  			break;
  			case 'Malade':
  				$('#mood-1').css('background', '#7a4747');
  			break;
  			case 'Triste':
  				$('#mood-1').css('background', '#838ea7');
  			break;
  			case 'Inquiet':
  				$('#mood-1').css('background', '#975497');
  			break;
  			default:
  				$('#mood-1').css('background', '$colorGrey1');
  		} 
	})
	$('#select-choice-mood2').change(function(){
		var mood = $('#select-choice-mood2').val();
		switch (mood){
  			case 'Heureux':
  				$('#mood-2').css('background', '#8cfc8c');
  			break;
  			case 'Energique':
  				$('#mood-2').css('background', '#f5f681');
  			break;
  			case 'Enervé':
  				$('#mood-2').css('background', '#f86464');
  			break;
  			case 'Fatigué':
  				$('#mood-2').css('background', '#858383');
  			break;
  			case 'Malade':
  				$('#mood-2').css('background', '#7a4747');
  			break;
  			case 'Triste':
  				$('#mood-2').css('background', '#838ea7');
  			break;
  			case 'Inquiet':
  				$('#mood-2').css('background', '#975497');
  			break;
  			default:
  				$('#mood-2').css('background', '$colorGrey1');
  		} 
	})
	$('#select-choice-mood3').change(function(){
		var mood = $('#select-choice-mood3').val();
		switch (mood){
  			case 'Heureux':
  				$('#mood-3').css('background', '#8cfc8c');
  			break;
  			case 'Energique':
  				$('#mood-3').css('background', '#f5f681');
  			break;
  			case 'Enervé':
  				$('#mood-3').css('background', '#f86464');
  			break;
  			case 'Fatigué':
  				$('#mood-3').css('background', '#858383');
  			break;
  			case 'Malade':
  				$('#mood-3').css('background', '#7a4747');
  			break;
  			case 'Triste':
  				$('#mood-3').css('background', '#838ea7');
  			break;
  			case 'Inquiet':
  				$('#mood-3').css('background', '#975497');
  			break;
  			default:
  				$('#mood-3').css('background', '$colorGrey1');
  		} 
	})
	$('#select-choice-mood4').change(function(){
		var mood = $('#select-choice-mood4').val();
		switch (mood){
  			case 'Heureux':
  				$('#mood-4').css('background', '#8cfc8c');
  			break;
  			case 'Energique':
  				$('#mood-4').css('background', '#f5f681');
  			break;
  			case 'Enervé':
  				$('#mood-4').css('background', '#f86464');
  			break;
  			case 'Fatigué':
  				$('#mood-4').css('background', '#858383');
  			break;
  			case 'Malade':
  				$('#mood-4').css('background', '#7a4747');
  			break;
  			case 'Triste':
  				$('#mood-4').css('background', '#838ea7');
  			break;
  			case 'Inquiet':
  				$('#mood-4').css('background', '#975497');
  			break;
  			default:
  				$('#mood-4').css('background', '$colorGrey1');
  		} 
	})
	$('#select-choice-mood5').change(function(){
		var mood = $('#select-choice-mood5').val();
		switch (mood){
  			case 'Heureux':
  				$('#mood-5').css('background', '#8cfc8c');
  			break;
  			case 'Energique':
  				$('#mood-5').css('background', '#f5f681');
  			break;
  			case 'Enervé':
  				$('#mood-5').css('background', '#f86464');
  			break;
  			case 'Fatigué':
  				$('#mood-5').css('background', '#858383');
  			break;
  			case 'Malade':
  				$('#mood-5').css('background', '#7a4747');
  			break;
  			case 'Triste':
  				$('#mood-5').css('background', '#838ea7');
  			break;
  			case 'Inquiet':
  				$('#mood-5').css('background', '#975497');
  			break;
  			default:
  				$('#mood-5').css('background', '$colorGrey1');
  		} 
	})
	$('#select-choice-mood5').change(function(){
		var mood = $('#select-choice-mood5').val();
		switch (mood){
  			case 'Heureux':
  				$('#mood-5').css('background', '#8cfc8c');
  			break;
  			case 'Energique':
  				$('#mood-5').css('background', '#f5f681');
  			break;
  			case 'Enervé':
  				$('#mood-5').css('background', '#f86464');
  			break;
  			case 'Fatigué':
  				$('#mood-5').css('background', '#858383');
  			break;
  			case 'Malade':
  				$('#mood-5').css('background', '#7a4747');
  			break;
  			case 'Triste':
  				$('#mood-5').css('background', '#838ea7');
  			break;
  			case 'Inquiet':
  				$('#mood-5').css('background', '#975497');
  			break;
  			default:
  				$('#mood-5').css('background', '$colorGrey1');
  		} 
	})
	$('#select-choice-mood6').change(function(){
		var mood = $('#select-choice-mood6').val();
		switch (mood){
  			case 'Heureux':
  				$('#mood-6').css('background', '#8cfc8c');
  			break;
  			case 'Energique':
  				$('#mood-6').css('background', '#f5f681');
  			break;
  			case 'Enervé':
  				$('#mood-6').css('background', '#f86464');
  			break;
  			case 'Fatigué':
  				$('#mood-6').css('background', '#858383');
  			break;
  			case 'Malade':
  				$('#mood-6').css('background', '#7a4747');
  			break;
  			case 'Triste':
  				$('#mood-6').css('background', '#838ea7');
  			break;
  			case 'Inquiet':
  				$('#mood-6').css('background', '#975497');
  			break;
  			default:
  				$('#mood-6').css('background', '$colorGrey1');
  		} 
	})
	$('#select-choice-mood7').change(function(){
		var mood = $('#select-choice-mood7').val();
		switch (mood){
  			case 'Heureux':
  				$('#mood-7').css('background', '#8cfc8c');
  			break;
  			case 'Energique':
  				$('#mood-7').css('background', '#f5f681');
  			break;
  			case 'Enervé':
  				$('#mood-7').css('background', '#f86464');
  			break;
  			case 'Fatigué':
  				$('#mood-7').css('background', '#858383');
  			break;
  			case 'Malade':
  				$('#mood-7').css('background', '#7a4747');
  			break;
  			case 'Triste':
  				$('#mood-7').css('background', '#838ea7');
  			break;
  			case 'Inquiet':
  				$('#mood-7').css('background', '#975497');
  			break;
  			default:
  				$('#mood-7').css('background', '$colorGrey1');
  		} 
	})

});




</script>





@endsection