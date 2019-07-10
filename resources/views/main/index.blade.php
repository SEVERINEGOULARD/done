{{-- VUE MAIN --}}

@extends('layouts.master')

@section('title')
votre semaine
@endsection

@section('scripts-header')

<div class="container-fluid header">
   <div class="row cst-header">
        <div class="col-md-1 cst-div-header">
          <img src="{{URL::asset('avatar.png')}}" class="cst-logo">
        </div>
        <div class="col-md-2 cst-div-header">
          
        </div>
       <div class="col-md-2 cst-div-header">
           <form action="/main/calendar" method="POST">
          @csrf
            <input type="week" id="week" name="week" min="2018-W18" max="2025-W26" value="2017-W1" class="cst-calendar">
          </form>
       </div>
       <div class="col-md-1 cst-div-header">
          
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
  <div class="container-aside col-md-1 cst-col-aside">
    <P>COLONNE ASIDE</P>
  </div>

  <!--MAIN-->
  <div class="container-main col-md-11">
    <div class="row">
      <div class="col-md-6 cst-col-main-left">
        <P>COLONNE MAIN GAUCHE</P>
      </div>
      <div class="col-md-6 cst-col-main-right">
        <P>COLONNE MAIN DROITE</P>
      </div>
    </div>

  </div>

</div>


@endsection

@section('scripts-footer')
<div class="container-fluid">
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
</div>








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

          }
          
      })

  })



});

</script>

@endsection
