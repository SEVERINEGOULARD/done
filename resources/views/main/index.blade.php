
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
                  <img src="{{Auth::user()->avatar}}" class="cst-avatar img-responsive center-block">
                </div>
                <div class="col-md-4">
                  <a href="{{ url('/logout') }}"><i class="fas fa-sign-out-alt cst-compte"></i></a>
                </div>
              </div>
           
          


        </div>
       <div class="col-md-2 cst-div-header">
           <form action="/main/calendar" method="POST">
          @csrf
            <input type="week" id="week" name="week" min="2019-W1" max="2025-W26" value="2019-W1" class="cst-calendar">
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

    <div id="draggable1" data-category="1" class="ui-widget-content modules" data-mod="1">
      <img id="dragImage" class="dragImage" src="">
    </div>

    <div id="draggable2" class="ui-widget-content modules" data-mod="2">
      <img id="dragImage" class="dragImage" src=""> 
    </div>
 
    <div id="draggable3" class="ui-widget-content modules" data-mod="3">
      <img id="dragImage" class="dragImage" src="">
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
  
  
});

</script>
@endsection
