{{-- VUE MAIN --}}

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
          <p>météo</p>
        </div>
       
        <div class="col-md-6 cst-div-header cst-nav">
          <nav>
             <ul class="cst-ul">
                 <li><a href="#">To do</a></li>
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

    <div id="draggable" class="ui-widget-content cst-Module module">
     <textarea class="input" type="text" name="textModule" data-module="1">A vos claviers</textarea>
    </div>

    <div id="draggable1" class="ui-widget-content cst-Module module">
     <input class="input" type="image" name="imageModule" data-module="2" placeholder="image">
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
<!-- <div class="container-fluid">
  <div class="row cst-footer">
    <div class="col-md-3 offset-md-1">
      <a href="">Mentions légales</a>
    </div>
    <div class="col-md-4">
      <p>Copyright 2019 - AWSY</p>
    </div>
    <div class="col-md-3">
      <a href="">CGU</a>
    </div>     
      
    
  </div>
</div> -->








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
            //console.log($result);

            for(var i = 0; i < $result.length; i++) {
              var zone = $('div[data-zone="'+$result[i]['zone_id']+'"]');
            
                $.each( $result[i], function() {

                  zone.html($result[i]['content']);
                
                });
            }
          }     
      })
  })
//***********************Ajax module**********************************//

//***********************Ajax module texte**********************************//

  
//   $('.textModule').on('keyup', function(e){
      
//       $content = $('.textModule').val();
//       console.log($content);

//        $.ajaxSetup({

//            headers: {
//            'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
//                }
//            });

//        $.ajax({

//            url : '/main/text',
//            dataType: "json",
//            method: "POST",
//            data: 'text=' + $content,
//            complete: function(data) {

//              $result = data.responseJSON;
//              console.log($result);

//       //       for(var i = 0; i < $result.length; i++) {
//       //         var zone = $('div[data-zone="'+$result[i]['zone_id']+'"]');
            
//       //           $.each( $result[i], function() {

//       //             zone.html($result[i]['content']);
                
//       //           });
//          //    }

//            }
          
//        })

//    });

});

</script>

@endsection
