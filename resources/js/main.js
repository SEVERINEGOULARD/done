$(function(){



/*get current week*/

    function getWeekNumber(d) {
        // Copy date so don't modify original
        d = new Date(Date.UTC(d.getFullYear(), d.getMonth(), d.getDate()));
        // Set to nearest Thursday: current date + 4 - current day number
        // Make Sunday's day number 7
        d.setUTCDate(d.getUTCDate() + 4 - (d.getUTCDay() || 7));
        // Get first day of year
        var yearStart = new Date(Date.UTC(d.getUTCFullYear(), 0, 1));
        // Calculate full weeks to nearest Thursday
        var weekNo = Math.ceil((((d - yearStart) / 86400000) + 1) / 7);
        // Return array of year and week number
        return [d.getUTCFullYear(), weekNo];
    }//close getWeekNumber

    var result = getWeekNumber(new Date());
    var week = result[0] + '-W' + result[1];
    console.log(week);
    document.getElementById("week").value = week;


/*Create TextArea*/
    function createTextArea(zone, content) {
        zone.append('<form class="textForm" method="post"></form>');
        $textArea = $('<textarea id="textArea" class="cst-textarea" placeholder="Votre texte ici..."></textarea>');
        $textArea.html(content);
        zone.find('.textForm').append($textArea);

        $textArea.keyup({ dragged: zone }, function (e) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({

                url: '/main/text', /*MainController->updateTextModule*/
                dataType: "json",
                method: "POST",
                data: 'text=' + $(this).val() + '&line-id=' + e.data.dragged.data('line-id')

            });
        });
    }//close creatTextArea

/*$zone with $dragged element in*/ 
    function prepareForInput($dragged, $zone, $animate) {

        $zone.droppable('option', 'disabled', 'true');
        $zone.append($dragged);
        $dragged.empty();

        $dragged.css({
            'left': '0px',
            'top': '0px'
        });

        if ($animate) {
            /* drop animation */
            $dragged.animate({
                backgroundColor: "#fff",
                height: "100%",
                width: "100%",
            }, 1000);
        }
        else {
            $dragged.css({
                backgroundColor: "#fff",
                height: "100%",
                width: "100%"
            });
        }

        /*close btn on modules*/
        $closeButton = $('<button type="button" class="btn-outline-danger cst-btn-close">X</button>');
        $parent = $zone;

        $closeButton.on("click", $parent, function (parentButton) {
            parentButton.data.droppable('option', 'disabled', false);

            $id = $(this).parent().data('lineId');
            console.log($id);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({

                url: '/main/delete', /*MainController->deleteModule*/
                dataType: "json",
                method: "POST",
                data: 'id=' + $id,
                complete: function (data) {

                    $result = data.responseJSON;
                 

                    parentButton.data.empty();


                }

            });

        });

        /*red cross button on each dragged*/
        $dragged
            .append($closeButton)
            .addClass("text-right");

    }//close prepareForInput

//Display week choozen on select input
     $('#week').on('change', function (e) {
         e.preventDefault();
         displayUserWeek() 
      });//close event #week on change

    function displayUserWeek() {

        $weekValue = $('#week').val();
        window.weekNumber = parseInt($weekValue.substr(6, 7));//store week number as an integer

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
            }
        });

        $.ajax({
            url: '/main',//main controller->selectWeek
            dataType: "json",
            method: "POST",
            data: 'number=' + window.weekNumber,
            complete: function (data) {

                $result = data.responseJSON;

                // empty all areas
                for ($s = 1; $s <= 6; $s++) {
                    var zone = $('div[data-zone=' + $s + ']');
                    zone.html('');
                    zone.droppable('option', 'disabled', false);
                }

                if ($result.length) {
                    // Week has data
                    // window.weekId = $result[0]['week_id'];

                    //Pour tous les modules
                    for (var i = 0; i < $result.length; i++) {

                        //On identifie sa zone
                        var zone = $('div[data-zone="' + $result[i]['zone_id'] + '"]');

                        //On crée une div intermédiaire (dans laquelle on append TextArea etc.) en clonant les icones à gauche
                        //cela permet d'avoir le meme comportement en drag&drop et en choix de semaine
                        $cloneDragged = $('#aside > div[data-mod=1]').clone();

                        prepareForInput($cloneDragged, zone, false);

                        //on remplit cette div intermédiaire avec l'élément qui correspond à la catégorie module_id
                        if ($result[i]['module_id'] == 1) {
                            createTextArea($cloneDragged, $result[i]['content']);
                        }
                    }
                }
            }
        });

    }//close displayUserWeek


    /* Display modules by weeks */


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

                //Clone module to keep an icon aside
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


                prepareForInput($dragged, $(this), true);

                /*behaviour by draggable category and ajax request for each*/

                /*cat 1*/
                if ($dragged.data('category') == "1") {
                    createTextArea($dragged, '');
                };

                /*cat 2*/
                if ($dragged.data('category') == "2") {

                    $dragged.append('<img id="preview" class="ill-mod-photo" src="img/polaroid.png"><form method="post" enctype="multipart/form-data"><div class="form-group file-parent"></div></form>');
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

                                    $result = data;

                                });

                                
                        };
                    });
                };//close cat 2

                /*cat 3*/
                if ($dragged.data('category') == "3") {
                    $dragged.append('<div class"row"><button class="design-button"><img src="img/ville1.png" /></button><button class="design-button"><img src="img/texture1.jpg" /></button><button class="design-button"><img src="img/perso1.png"/></button><button class="design-button"><img src="img/arab2.png"/></button><button class="design-button"><img src="img/arab3.png"/></button></div><div class"row"><button class="design-button"><img src="img/chat1.jpg" /></button><button class="design-button"><img src="img/chat3.jpg" /></button><button class="design-button"><img src="img/livres.jpg" /></button></button><button class="design-button"><img src="img/arab4.png" /></button></button><button class="design-button"><img src="img/tempete.jpg" /></button><button class="design-button"><img src="img/tempete.jpg" /></button></button></button><button class="design-button"><img src="img/tempete.jpg" /></button><button class="design-button"><img src="img/tempete.jpg" /></button></button></button><button class="design-button"><img src="img/tempete.jpg" /></button></button></button><button class="design-button"><img src="img/tempete.jpg" /></button><button class="design-button"><img src="img/tempete.jpg" /></button></div>');
                }
                $(".design-button").on("click", function (e) {
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

                        }
                    });
                });/*close cat3*/

                /*cat 4*/
                if ($dragged.data('category') == "4") {
                  $dragged.append('<div id="moodDrag"></div>');
                
                   $.get("mood.blade.php", function (data) {
                      $dragged.find('#moodDrag').html(data);
                   });

             } /*close cat4*/   



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
console.log($result);
                        $dragged.attr('data-line-id', $result['id']);
                    }
                });

            }
        });
    };


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
              '#select-choice-mood7',
            ];   

/*Array : select div for mood*/  
var divMood = [
              '#mood-1',
              '#mood-2',
              '#mood-3',
              '#mood-4',
              '#mood-5',
              '#mood-6',
              '#mood-7',
              ];     

    
              /*get select value and display mood on div*/
        function moodDisplay(){
            console.log($(this).val());
            for($i=0 ; $i<select.length ; $i++){
                $moodChoozen = $(select[$i]).val(); console.log($moodChoozen);
                $zone = divMood[$i];console.log($zone);
              switch ($moodChoozen){
                case '1': 
                $($zone).css("background-image", "url('/heureux.png')").css("background-size", "cover").css("background-position","center");
                break;
                case '2': 
                $($zone).css("background-image", "url('/energique.png')").css("background-size", "cover").css("background-position","center");
                break;
                case '3': 
                $($zone).css("background-image", "url('/enerve.png')").css("background-size", "cover").css("background-position","center");
                break;
                case '4': 
                $($zone).css("background-image", "url('/fatigue.png')").css("background-size", "cover").css("background-position","center");
                break;
                case '5': 
                $($zone).css("background-image", "url('/malade.png')").css("background-size", "cover").css("background-position","center");
                break;
                case '6': 
                $($zone).css("background-image", "url('/triste.png')").css("background-size", "cover").css("background-position","center");
                break;
                case '7': 
                $($zone).css("background-image", "url('/inquiet.png')").css("background-size", "cover").css("background-position","center");
                break;
                case '8': 
                $($zone).css("background-image", "url('/amoureux.png')").css("background-size", "cover").css("background-position","center");
                break;
                case '9': 
                $($zone).css("background-image", "url('/calme.png')").css("background-size", "cover").css("background-position","center");
                break;
                case '10': 
                $($zone).css("background-image", "url('/colere.png')").css("background-size", "cover").css("background-position","center");
                break;
                default: $($zone).css("background-image", "url('/what.jpg')").css("background-size", "cover").css("background-position","center");
                }

            }
            
       }
  
       /*display mood on div after change*/
    $(document).on('change', '.cst-select-mood', moodDisplay);
    
   

    /*Ajax toDo*/

    $('#sendToDo').on('click', function(e){
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
            // console.log($result);

            
                if(($result['toDo'] && $result['category'])){
                
                $('#list-items').append("<div class='row' class='list'><div class='col-md-8'>" + $result['toDo'] + " </div> <div class='col-md-2 text-center'><input type='checkbox'></div><div class='col-md-2'><a class='deleteList' data-delete='"+ $result['category'] +"'><i class='far fa-trash-alt'></i></a></div></div>");
                }
            }     
        })
    });


    $('#chooseCat').on('change', function(e){
        e.preventDefault();
        $chooseCat = $('#chooseCat').val();


        $.ajaxSetup({

            headers: {
            'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
                }
            });

        $.ajax({

            url : '/toDo/chooseCat',
            dataType: "json",
            method: "POST",
            data: 'category=' + $chooseCat,
            complete: function(data) {

                $result = data.responseJSON;
                
            
                
                $('#list-items').empty();


                for(var i = 0; i < $result.length; i++) {
                    $('#list-items').append("<div class='row' class='list'><div class='col-md-8'>" + $result[i]['content'] + " </div> <div class='col-md-2 text-center'><input type='checkbox'></div><div class='col-md-2'><a class='deleteList' data-delete='"+ $result[i]['id'] +"'><i class='far fa-trash-alt'></i></a></div></div>"); 
                }
            }     
        })
    });


    $(document).on('click', '.deleteList', function(e){ 
        e.preventDefault(); 

        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')}
        });

        $.ajax({
            url : '/toDo/delete', 
            dataType : 'json',
            method : 'POST',
            data : 'id=' + $(this).data('delete'),
            complete: function(data){
                $result = data.responseJSON;
                $('a[data-delete="'+ $result['id'] +'"]').parent().parent().remove();
            }
            
        });

    });

    $(document).on('click', '.checkbox', function(){
       $valueCheck = $(this).val();
       
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')}
        });

        $.ajax({
            url : '/toDo/checkBox', 
            dataType : 'json',
            method : 'POST',
            data : 'id=' + $(this).data('checkbox') + '&value=' + $valueCheck,
            complete: function(data){
                $result = data.responseJSON;
                console.log($result);
            }
            
        });

    });
 
    displayUserWeek();

 
});
