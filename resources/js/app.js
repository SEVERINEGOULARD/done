/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });

$(function () {

    /*Display week choozen on select input*/
    $('#week').on('change', function(e){
      
      $weekValue = $('#week').val();
      window.weekNumber = parseInt($weekValue.substr(6, 7));//store week number as an integer

      $.ajaxSetup({
          headers: {
          'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
              }
          }); 
      $.ajax({
          url : '/main',//main controller->selectWeek
          dataType: "json",
          method: "POST",
          data: 'number=' + window.weekNumber,
          complete: function(data) {

            $result = data.responseJSON;
            console.log($result); 

            if($result.length){
              // Week has data
              // window.weekId = $result[0]['week_id'];
              for(var i = 0; i < $result.length; i++) {
                var zone = $('div[data-zone="'+$result[i]['zone_id']+'"]');
                $.each( $result[i], function() {

                  zone.html($result[i]['content']);
                
                });
              }
            }else{
              // Blank week
              for($s = 1 ; $s <= 6 ; $s++){
                var zone = $('div[data-zone=' + $s + ']');
                zone.html('');
              }
            }
          }     
      })
  })



    /*DRAGGABLES DECLARE*/

    $("#draggable1").draggable({
        revert: "invalid",
        zIndex: 1001
    }); 

    $("#draggable2").draggable({
        revert: "invalid",
        zIndex: 1001
    });        
           
    $("#draggable3").draggable({
        revert: "invalid",
        zIndex: 1001
    });

    $("#draggable4").draggable({
        revert: "invalid",
        zIndex: 1001
    });


    // Behaviour drop/drag
    for (i = 1; i <= 6; i++) {
        $("#dropZone" + i).droppable({
            zIndex: 1,
            tolerance: "fit",

            drop: function (event, ui) {
                $droppedOn = $(this);
                $dragged = ui.draggable;

                $droppedOnData = $droppedOn.data('zone');
                $draggedData = $dragged.data('mod');


                //Clone module
                $clone = $dragged.clone();
                $clone.css({
                    'left': '',
                    'top': ''
                });
                $clone.draggable({
                    revert: "invalid",
                    zIndex: 1001
                });
                $clone.draggable("option", "ui-draggable-dragging", false);
                $clone.draggable("option", "resizable", false);
                $dragged.after($clone);
                $(this).append($dragged);
                $dragged.css({
                    'left': '0px',
                    'top': '0px'
                });

                $dragged.empty(".anim"); 

                /* drop animation */
                $dragged.animate({

                    backgroundColor: "#fff",
                    height: "100%",
                    width: "100%",
                }, 1000);

				/*close btn on modules*/
               $closeButton = $('<button type="button" class="btn-outline-danger cst-button">X</button>');
               $parent = $(this);
               $closeButton.on("click", $parent, function (parentButton) {
                   parentButton.data.droppable('option', 'disabled', false);
                   parentButton.data.empty();
               });
               /*behaviour by draggable category and ajax request for each*/
				
               /*cat 1*/
               if ($dragged.data('category') == "1") {
                   $dragged.append('<form class="textForm" method="post"></form>');
                   $textArea = $('<textarea id="textArea" class="cst-textarea" placeholder="Votre texte ici..."></textarea>');

                   $dragged.find('.textForm').append($textArea);
                   $textArea.keyup({ dragged: $dragged }, function (e) {

                       $.ajaxSetup({
                           headers: {
                               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                           }
                       });

                       $.ajax({

                           url: '/main/text', /*MainController->updateTextModule*/
                           dataType: "json",
                           method: "POST",
                           data: 'text=' + $(this).val() + '&line-id=' + e.data.dragged.data('line-id'),
                           complete: function (data) {
                               $result = data.responseJSON;
                               console.log($result);

                           }

                       });
                   });
               };


               /*cat 2*/
               if ($dragged.data('category') == "2") {

                   $dragged.append('<img id="preview" class="ill-mod-photo" src="img/polaroid.png"><form method="post"  enctype="multipart/form-data"><div class="form-group file-parent"></div></form>');
                   $fileInput = $('<input type="file" class="form-control-file">');
                   $dragged.find('.file-parent').append($fileInput);

                   // on rajoute dragged comme argument qui va se coller dans l'event e (à e.data.dragged)
                   // ça permet d'appeler cet élément dragged au moment de l'event sans devoir rechercher avec
                   // des parents de parents etc.
                   $fileInput.on('change', { dragged: $dragged }, function (e) {
                       let thatTarget = e.currentTarget;

                       if (thatTarget.files && thatTarget.files[0]) {
                           $myData = new FormData();
                           $myData.append('image', thatTarget.files[0]);
                           $myData.append('line-id', e.data.dragged.data('line-id'));

                           $.ajaxSetup({
                               headers: {
                                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                               }
                           });

                           $.ajax({
                               method: 'POST',
                               url: '/main/image',/*MainController -> uploadImageModule*/
                               data: $myData,
                               contentType: false,
                               processData: false,
                           })
                           .done(function (data) {

                               $result = data.responseJSON;
                               console.log(data);
                           })

                           .fail(function (data) {


                           });
                       };
                   });
               };

               /*cat 3*/
               if ($dragged.data('category') == "3") {
                   $dragged.append('<div class"row"><button class="design-button"><img src="img/ville1.png" /></button><button class="design-button"><img src="img/texture1.jpg" /></button><button class="design-button"><img src="img/perso1.png"/></button><button class="design-button"><img src="img/arab2.png"/></button><button class="design-button"><img src="img/arab3.png"/></button></div><div class"row"><button class="design-button"><img src="img/chat1.jpg" /></button><button class="design-button"><img src="img/chat3.jpg" /></button><button class="design-button"><img src="img/livres.jpg" /></button></button><button class="design-button"><img src="img/arab4.png" /></button></button><button class="design-button"><img src="img/tempete.jpg" /></button><button class="design-button"><img src="img/tempete.jpg" /></button></button></button><button class="design-button"><img src="img/tempete.jpg" /></button><button class="design-button"><img src="img/tempete.jpg" /></button></button></button><button class="design-button"><img src="img/tempete.jpg" /></button></button></button><button class="design-button"><img src="img/tempete.jpg" /></button><button class="design-button"><img src="img/tempete.jpg" /></button></div>');
               }
               $(".design-button").on("click", function(e){
                   e.preventDefault();
                   $.ajaxSetup({
                       headers: {
                           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                       }
                   });
                   $.ajax({
                       url: '/design',
                       dataType: "json",
                       method: "POST",
                       data: 'design=' + $('.design-button'),
                       complete: function (data) {
                           $result = data.responseJSON;
                           console.log($result);
                       }
                   });
               });

              /*cat 4*/
               if ($dragged.data('category') == "4") {
                  $dragged.append('<div id="moodDrag"></div>');
                   $.get("mood.html", function (data) {
                      $dragged.find('#moodDrag').html(data);
                   });




                   
// console.log($moodDrag);
                   // $dragged.find('.file-moodParent').append($moodDrag);   

                   // $textArea.keyup({ dragged: $dragged }, function (e) {

                   //     $.ajaxSetup({
                   //         headers: {
                   //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   //         }
                   //     });

                   //     $.ajax({

                   //         url: '/main/text', /*MainController->updateTextModule*/
                   //         dataType: "json",
                   //         method: "POST",
                   //         data: 'text=' + $(this).val() + '&line-id=' + e.data.dragged.data('line-id'),
                   //         complete: function (data) {
                   //             $result = data.responseJSON;
                   //             console.log($result);

                   //         }

                   //     });
                   // });
               };

               /*red cross button on each dragged*/
               $dragged
                   .append($closeButton)
                   .addClass("text-right");
               $dragged.draggable("option", "disabled", true);
               $(this).droppable('option', 'disabled', true);


               // $droppedOn $dragged
               $.ajaxSetup({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
                   }
               });
               $.ajax({
                   url: '/main/ajax',/*Main Controller -> InsertDrop*/
                   dataType: "json",
                   method: "POST",
                   data: 'zone=' + $droppedOnData + '&module=' + $draggedData + '&weekId=' + window.weekNumber,
                   complete: function (data) {
                       $result = data.responseJSON;
                       
                       $dragged.attr('data-line-id', $result['id']);
                   }
               });
           }
       });
   };

 /*Ajax toDo*/
   $('#sendToDo').on('click', function (e) {
       e.preventDefault();
       $toDo = $('#toDo').val();
       $category = $('#category').val();
       $.ajaxSetup({
           headers: {
           'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
               }
           });
       $.ajax({
           url : '/toDo',
           dataType: "json",
           method: "POST",
           data: 'toDo=' + $toDo + '&category=' + $category,
           complete: function(data) {
             $result = data.responseJSON;
          if($('div[data-toDo="' + $result['category'] + '"]').length){
          $('div[data-toDo="' + $result['category'] + '"]').html($result['content']);
          }
           $('#test').append("<p>" + $result['toDo'] + "</p>");
           }
       });
   });

/*MOOD TRACKER*/

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

    $(document).on('change', select[0], function(){  
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
            default: $($zone).css("background-image", "url('/what.jpg')").css("background-size", "cover").css("background-position","center");
          }
        })

        $(document).on('change', select[1], function(){  
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

        $(document).on('change', select[2], function(){  
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

        $(document).on('change', select[3], function(){  
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

        $(document).on('change', select[4], function(){  
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

        $(document).on('change', select[5], function(){  
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

        $(document).on('change', select[6], function(){  
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
    
