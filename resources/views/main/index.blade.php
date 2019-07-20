@extends('layouts.master')

@section('title')
votre semaine
@endsection



@section('scripts-header')

<div class="container-fluid header" id="header">
  <div class="container">
    <div class="row cst-header">
      <div class="col-2 cst-div-header">
        <a href="/"><img src="{{URL::asset('logo1.png')}}" class="cst-logo img-fluid"></a>
      </div>
      <div class="col-5 cst-div-hello">
        <div class="row cst-row-admin">
            <p>Bonjour {{Auth::user()->pseudo}}</p>
        </div>
        <div class="row cst-row-admin cst-row-sub-admin">
            <div class="col-4">
              <a href="/mon_compte"><img class="img-header img-fluid" src="1205514.svg"></a>
            </div>
            <div class="col-4">
              <img src="{{Auth::user()->avatar}}" class="cst-avatar img-fluid img-header center-block">
            </div>
            <div class="col-4">
                <a href="{{ url('/logout') }}"><img class="img-header img-fluid" src="log-out.svg"></a>
            </div>
          </div>         
      </div>
      <div class="col-3 cst-div-header">
          <form action="/main/calendar" method="POST">
          @csrf
            <input type="week" id="week" name="week" min="2019-W1" max="2025-W26" class="cst-calendar">
          </form>
      </div>
      <!-- <div class="col-2 cst-div-header meteo">
        Widget météo start 
        <div id="cont_MzMwMDB8MXw0fDV8M3xCQkUwRkZ8MnxGRkZGRkZ8Y3wx">
            <div id="spa_MzMwMDB8MXw0fDV8M3xCQkUwRkZ8MnxGRkZGRkZ8Y3wx">
                <a id="a_MzMwMDB8MXw0fDV8M3xCQkUwRkZ8MnxGRkZGRkZ8Y3wx" href="http://www.meteocity.com/france/paris_v75056/" target="_blank" style="color:#fff;text-decoration:none;">Météo Paris</a>
            </div>
            <script type="text/javascript" src="http://widget.meteocity.com/js/MzMwMDB8MXw0fDV8M3xCQkUwRkZ8MnxGRkZGRkZ8Y3wx"></script>
        </div>
          Widget météo end 
      </div> -->
        
      <div class="col-2  cst-div-header cst-nav">
        <nav>
            <ul class="cst-ul">
                <li><a href="/contact">&nbspContact</a></li>
            </ul>
        </nav>
      </div>
    </div>
  </div>
</div>

@endsection


@section('content')
@if((session()->has('bienvenue')))
  <div class="container text-center">
    <div class="row pt-4">
      <h1>{{session("bienvenue")}}</h1>
      <p class="cst-p-main">Vous pouvez dès à présent faire glisser les différents modules, se situant à gauche de votre écran, sur votre livre !</p>
    </div>
  </div>
@endif
      


<!--ASIDE FIXE-->
<div class="container-fluid row">
  <!--ASIDE-->
  <div id="aside" class="container-aside col-1 cst-col-aside dragModules">
    <div class="row cst-main-mq">
      <div id="draggable1" data-category="1" class="modules" data-mod="1">
        <img class="dragImage" src="img/moduleIco1Crayon.svg">
      </div>

      <div id="draggable2" data-category="2" class="modules" data-mod="2">
        <img class="dragImage" src="img/moduleIco2Photo.svg"> 
      </div>

      <div id="draggable3" data-category="3" class="modules" data-mod="3">
        <img class="dragImage" src="img/moduleIco3Gif.svg">
      </div>

      <div id="draggable4" data-category="4" class="modules" data-mod="4">
        <img class="dragImage" src="img/moduleIco4Humeur.svg">
      </div>

      <div id="draggable5" data-category="5" class=" modules" data-mod="5">
        <img class="dragImage yt blackNWhite" src="img/moduleIco5YouTube.svg" alt="module en cours de développement">
      </div>

        <div id="draggable6" data-category="6" class=" modules" data-mod="6">
        <img class="dragImage blackNWhite" src="img/moduleIco6Local.svg" alt="module en cours de développement">
      </div>

      <div id="draggable7" data-category="7" class=" modules" data-mod="7">
        <img class="dragImage blackNWhite" src="img/moduleIco7Money.svg" alt="module en cours de développement">
      </div>

      <div id="draggable8" data-category="8" class=" modules" data-mod="8">
        <img class="dragImage blackNWhite" src="img/moduleIco8Sport.svg" alt="module en cours de développement">
      </div>

      <div class="pt-5">
        <a href="/toDo"><button class="btn-toDoList">To do List</button></a>
      </div>
    </div>
  </div>

  <!--MAIN-->
  <div class="container-main col-md-11">
    <div class="row cst-main-row" id="dropZones">

      <div class="col-6 cst-col-main-left">
        <div class="row cst-subrow dropZone" data-zone="1" id="dropZone1">
         
        </div>
         <div class="row cst-subrow dropZone" data-zone="2" id="dropZone2">
          
        </div>
         <div class="row cst-subrow dropZone" data-zone="3" id="dropZone3">
          
        </div>
      </div>
      <div class="col-6 cst-col-main-right">
        <div class="row cst-subrow dropZone" data-zone="4" id="dropZone4">
          
        </div>
         <div class="row cst-subrow dropZone" data-zone="5" id="dropZone5">
        </div>
         <div class="row cst-subrow dropZone" data-zone="6" id="dropZone6">
          
        </div>
      </div>   
    </div>
  </div>
</div>


@endsection

@section('scripts-footer')

<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

@endsection
