
@extends('layouts.master')

@section('title')
votre semaine
@endsection



@section('scripts-header')

<div class="container-fluid header" id="header">
    <div class="row cst-header">
        <div class="col-md-1 cst-div-header">
          <a href="/"><img src="{{URL::asset('logo.png')}}" class="cst-logo"></a>
        </div>
        <div class="col-md-2 cst-div-hello">
            <div class="row cst-row-admin">
                <p>Bonjour {{Auth::user()->pseudo}}</p>
            </div>
             
            <div class="row cst-row-admin cst-row-sub-admin">
                <div class="col-md-4">
                    <a href="/mon_compte"><i class="fas fa-cog cst-compte"></i></a>
                </div>
                <div class="col-md-4">
                    <img src="{{URL::asset(Auth::user()->avatar)}}" class="cst-avatar img-responsive center-block">
                </div>
                <div class="col-md-4">
                    <a href="{{ url('/logout') }}"><i class="fas fa-sign-out-alt cst-compte"></i></a>
                </div>
            </div>         
        </div>
        <div class="col-md-2 cst-div-header">
            <form action="/main/calendar" method="POST">
            @csrf
            <input type="week" id="week" name="week" min="2018-W18" max="2025-W26" value="2017-W1" class="cst-calendar">
            </form>
        </div>
        <div class="col-md-1 cst-div-header">
        <!--Widget météo start -->
                <div id="cont_MzMwMDB8MXw0fDV8M3xCQkUwRkZ8MnxGRkZGRkZ8Y3wx">
                    <div id="spa_MzMwMDB8MXw0fDV8M3xCQkUwRkZ8MnxGRkZGRkZ8Y3wx">
                        <a id="a_MzMwMDB8MXw0fDV8M3xCQkUwRkZ8MnxGRkZGRkZ8Y3wx" href="http://www.meteocity.com/france/paris_v75056/" target="_blank" style="color:#fff;text-decoration:none;">Météo Paris</a>
                    </div>
                    <script type="text/javascript" src="http://widget.meteocity.com/js/MzMwMDB8MXw0fDV8M3xCQkUwRkZ8MnxGRkZGRkZ8Y3wx"></script>
                </div>
        <!--Widget météo end -->
        </div>
       
        <div class="col-md-3 offset-md-2 cst-div-header cst-nav">
            <nav>
                <ul class="cst-ul">
                    <li><a href="/toDo">To do</a></li>
                    <li><a href="#">Journal</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

@endsection


@section('content')

<div class="container-fluid row">
  <!--ASIDE-->
  <div class="container-aside col-md-1 cst-col-aside dragModules">

    <div id="draggable1" data-category="1" class="ui-widget-content modules" data-mod="1">
      <img class="dragImage" src="img/moduleIco1Crayon.svg">
    </div>

    <div id="draggable2" data-category="2" class="ui-widget-content modules" data-mod="2">
      <img class="dragImage" src="img/moduleIco2Photo.svg"> 
    </div>

    <div id="draggable3" data-category="3" class="ui-widget-content modules" data-mod="3">
      <img class="dragImage" src="img/moduleIco3Paysage.svg">
    </div>

    <div id="draggable4" data-category="4" class="ui-widget-content modules" data-mod="4">
      <img class="dragImage" src="img/moduleIco4Humeur.svg">
    </div>

    <div id="draggable5" data-category="5" class="ui-widget-content modules" data-mod="5">
      <img class="dragImage yt" src="img/moduleIco5YouTube.svg">
    </div>

  </div>

  <!--MAIN-->
  <div class="container-main col-md-11">
    <div class="row cst-main-row" id="dropZones">
      <div class="col-md-6 cst-col-main-left">
        <div class="row cst-subrow dropZone" data-zone="1" id="dropZone1">
          
        </div>
         <div class="row cst-subrow dropZone" data-zone="2" id="dropZone2">
          
        </div>
         <div class="row cst-subrow dropZone" data-zone="3" id="dropZone3">
          
        </div>
      </div>
      <div class="col-md-6 cst-col-main-right">
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

<!--***************SCRIPTS**************-->
<script>

$(function(){
  
  $('#week').on('change', function(e){
      
      $weekValue = $('#week').val();

      $.ajaxSetup({

          headers: {
          'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
              }
          });

      $.ajax({

          url : '/main',
          dataType: "json",
          method: "POST",
          data: 'id=' + $weekValue,
          complete: function(data) {

            $result = data.responseJSON;
            console.log($result);

            window.weekId = $result[0]['week_id'];

            for(var i = 0; i < $result.length; i++) {
              var zone = $('div[data-zone="'+$result[i]['zone_id']+'"]');
              $.each( $result[i], function() {

                zone.html($result[i]['content']);
              
              });
            }
          }     
      })
  })
});

</script>
@endsection
