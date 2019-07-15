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
		<div class="row"><!--zones moods-->
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

/*Affichage des moods au chargement*/



/*Array : moods available*/
var mood = [
            'Heureux',
            'Energique',
            'Enervé',
            'Fatigué',
            'Malade',
            'Triste',
            'Inquiet',
            'Amoureux',
            'Calme',
            'En colère'
          ];
/*Array : select input for week*/
var select = [
              '#select-choice-mood1',
              '#select-choice-mood2',
              '#select-choice-mood3',
              '#select-choice-mood4',
              '#select-choice-mood5',
              '#select-choice-mood6',
              '#select-choice-mood7'
            ];   

/*Array : select div for mood*/  
var divMood = [
              '#mood-1',
              '#mood-2',
              '#mood-3',
              '#mood-4',
              '#mood-5',
              '#mood-6',
              '#mood-7'
              ];     

    $(select[0]).change(function(){  
        $moodChoozen = $(this).val();
        $zone = divMood[0];
          switch ($moodChoozen){
            case 'Heureux': 
            $($zone).css("background-image", "url('/heureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Energique': 
            $($zone).css("background-image", "url('/energique.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Enervé': 
            $($zone).css("background-image", "url('/enerve.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Fatigué': 
            $($zone).css("background-image", "url('/fatigue.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Malade': 
            $($zone).css("background-image", "url('/malade.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Triste': 
            $($zone).css("background-image", "url('/triste.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Inquiet': 
            $($zone).css("background-image", "url('/inquiet.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Amoureux': 
            $($zone).css("background-image", "url('/amoureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Amoureux': 
            $($zone).css("background-image", "url('/amoureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Calme': 
            $($zone).css("background-image", "url('/calme.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'En colère': 
            $($zone).css("background-image", "url('/colere.png')").css("background-size", "cover").css("background-position","center");
            break;
            default: $($zone).css("background", "grey");
          }
        })

        $(select[1]).change(function(){  
        $moodChoozen = $(this).val();
        $zone = divMood[1];
          switch ($moodChoozen){
            case 'Heureux': 
            $($zone).css("background-image", "url('/heureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Energique': 
            $($zone).css("background-image", "url('/energique.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Enervé': 
            $($zone).css("background-image", "url('/enerve.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Fatigué': 
            $($zone).css("background-image", "url('/fatigue.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Malade': 
            $($zone).css("background-image", "url('/malade.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Triste': 
            $($zone).css("background-image", "url('/triste.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Inquiet': 
            $($zone).css("background-image", "url('/inquiet.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Amoureux': 
            $($zone).css("background-image", "url('/amoureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Amoureux': 
            $($zone).css("background-image", "url('/amoureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Calme': 
            $($zone).css("background-image", "url('/calme.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'En colère': 
            $($zone).css("background-image", "url('/colere.png')").css("background-size", "cover").css("background-position","center");
            break;
            default: $($zone).css("background", "grey");
          }
        })

        $(select[2]).change(function(){  
        $moodChoozen = $(this).val();
        $zone = divMood[2];
          switch ($moodChoozen){
            case 'Heureux': 
            $($zone).css("background-image", "url('/heureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Energique': 
            $($zone).css("background-image", "url('/energique.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Enervé': 
            $($zone).css("background-image", "url('/enerve.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Fatigué': 
            $($zone).css("background-image", "url('/fatigue.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Malade': 
            $($zone).css("background-image", "url('/malade.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Triste': 
            $($zone).css("background-image", "url('/triste.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Inquiet': 
            $($zone).css("background-image", "url('/inquiet.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Amoureux': 
            $($zone).css("background-image", "url('/amoureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Amoureux': 
            $($zone).css("background-image", "url('/amoureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Calme': 
            $($zone).css("background-image", "url('/calme.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'En colère': 
            $($zone).css("background-image", "url('/colere.png')").css("background-size", "cover").css("background-position","center");
            break;
            default: $($zone).css("background", "grey");
          }
        })

        $(select[3]).change(function(){  
        $moodChoozen = $(this).val();
        $zone = divMood[3];
          switch ($moodChoozen){
            case 'Heureux': 
            $($zone).css("background-image", "url('/heureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Energique': 
            $($zone).css("background-image", "url('/energique.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Enervé': 
            $($zone).css("background-image", "url('/enerve.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Fatigué': 
            $($zone).css("background-image", "url('/fatigue.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Malade': 
            $($zone).css("background-image", "url('/malade.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Triste': 
            $($zone).css("background-image", "url('/triste.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Inquiet': 
            $($zone).css("background-image", "url('/inquiet.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Amoureux': 
            $($zone).css("background-image", "url('/amoureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Amoureux': 
            $($zone).css("background-image", "url('/amoureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Calme': 
            $($zone).css("background-image", "url('/calme.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'En colère': 
            $($zone).css("background-image", "url('/colere.png')").css("background-size", "cover").css("background-position","center");
            break;
            default: $($zone).css("background", "grey");
          }
        })

        $(select[4]).change(function(){  
        $moodChoozen = $(this).val();
        $zone = divMood[4];
          switch ($moodChoozen){
            case 'Heureux': 
            $($zone).css("background-image", "url('/heureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Energique': 
            $($zone).css("background-image", "url('/energique.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Enervé': 
            $($zone).css("background-image", "url('/enerve.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Fatigué': 
            $($zone).css("background-image", "url('/fatigue.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Malade': 
            $($zone).css("background-image", "url('/malade.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Triste': 
            $($zone).css("background-image", "url('/triste.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Inquiet': 
            $($zone).css("background-image", "url('/inquiet.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Amoureux': 
            $($zone).css("background-image", "url('/amoureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Amoureux': 
            $($zone).css("background-image", "url('/amoureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Calme': 
            $($zone).css("background-image", "url('/calme.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'En colère': 
            $($zone).css("background-image", "url('/colere.png')").css("background-size", "cover").css("background-position","center");
            break;
            default: $($zone).css("background", "grey");
          }
        })

        $(select[5]).change(function(){  
        $moodChoozen = $(this).val();
        $zone = divMood[5];
          switch ($moodChoozen){
            case 'Heureux': 
            $($zone).css("background-image", "url('/heureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Energique': 
            $($zone).css("background-image", "url('/energique.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Enervé': 
            $($zone).css("background-image", "url('/enerve.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Fatigué': 
            $($zone).css("background-image", "url('/fatigue.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Malade': 
            $($zone).css("background-image", "url('/malade.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Triste': 
            $($zone).css("background-image", "url('/triste.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Inquiet': 
            $($zone).css("background-image", "url('/inquiet.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Amoureux': 
            $($zone).css("background-image", "url('/amoureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Amoureux': 
            $($zone).css("background-image", "url('/amoureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Calme': 
            $($zone).css("background-image", "url('/calme.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'En colère': 
            $($zone).css("background-image", "url('/colere.png')").css("background-size", "cover").css("background-position","center");
            break;
            default: $($zone).css("background", "grey");
          }
        })

        $(select[6]).change(function(){  
        $moodChoozen = $(this).val();
        $zone = divMood[6];
          switch ($moodChoozen){
            case 'Heureux': 
            $($zone).css("background-image", "url('/heureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Energique': 
            $($zone).css("background-image", "url('/energique.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Enervé': 
            $($zone).css("background-image", "url('/enerve.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Fatigué': 
            $($zone).css("background-image", "url('/fatigue.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Malade': 
            $($zone).css("background-image", "url('/malade.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Triste': 
            $($zone).css("background-image", "url('/triste.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Inquiet': 
            $($zone).css("background-image", "url('/inquiet.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Amoureux': 
            $($zone).css("background-image", "url('/amoureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Amoureux': 
            $($zone).css("background-image", "url('/amoureux.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'Calme': 
            $($zone).css("background-image", "url('/calme.png')").css("background-size", "cover").css("background-position","center");
            break;
            case 'En colère': 
            $($zone).css("background-image", "url('/colere.png')").css("background-size", "cover").css("background-position","center");
            break;
            default: $($zone).css("background", "grey");
          }
        })


    });
  

</script>





@endsection