$(function () {



    /*get current week*/
    function getWeekNumber(d) {

        d = new Date(Date.UTC(d.getFullYear(), d.getMonth(), d.getDate()));
        d.setUTCDate(d.getUTCDate() + 4 - (d.getUTCDay() || 7));
        var yearStart = new Date(Date.UTC(d.getUTCFullYear(), 0, 1));
        var weekNo = Math.ceil((((d - yearStart) / 86400000) + 1) / 7);
        return [d.getUTCFullYear(), weekNo];
    }//close getWeekNumber

    var result = getWeekNumber(new Date());
    var week = result[0] + '-W' + result[1];
    document.getElementById("week").value = week;

    /*dropzones highlight on draggables drag and on stop*/
    function highlight(draggable) {

        draggable.draggable({

            drag: function (event, ui) {
                
                $('.dropZone:not(.ui-droppable-disabled)').addClass('light');

            },

            stop: function (event, ui) {

                $('.dropZone').removeClass('light');

            }
        });

    }


    /*Create Module TextArea*/
    function createTextArea(zone, content) {
        zone.append('<form class="textForm" method="post"></form>');
        $textArea = $('<textarea class="cst-textarea" placeholder="Votre texte ici..."></textarea>');
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
    }

    /*Create Module Image*/
    function createImage(zone, base64content) {
        $img = $('<img class="img-limit" src="data:image/png;base64,' + base64content + '">');
        zone.append($img);
    }

    /*Create Module Design*/
    function createEmptyDesign(zone) {
        zone.append('<div class="row parentimag"></div>');
        $designBtn = $('<button id="btn1" data-but="img/tenor1.gif" class="design-button"><img src="img/tenor1.gif" /><button id="btn2" data-but="img/tenor2.gif" class="design-button"><img class="modules-back" src="img/tenor2.gif" /><button id="btn3" data-but="img/tenor3.gif" class="design-button"><img class="modules-back" src="img/tenor3.gif" /><button id="btn4" data-but="img/tenor4.gif" class="design-button"><img src="img/tenor4.gif" /><button id="btn5" data-but="img/tenor5.gif" class="design-button"><img src="img/tenor5.gif" /><button id="btn6" data-but="img/tenor6.gif" class="design-button"><img src="img/tenor6.gif" /><button id="btn7" data-but="img/tenor7.gif" class="design-button"><img src="img/tenor7.gif" /><button id="btn8" data-but="img/tenor8.gif" class="design-button"><img src="img/tenor8.gif" /><button id="btn9" data-but="img/tenor9.gif" class="design-button"><img src="img/tenor9.gif" /><button id="btn10" data-but="img/tenor10.gif" class="design-button"><img src="img/tenor10.gif" /><button id="btn11" data-but="img/9.gif" class="design-button"><img src="img/9.gif" /><button id="btn12" data-but="img/tenor12.gif" class="design-button"><img src="img/tenor12.gif" /><button id="btn13" data-but="img/teno13.gif" class="design-button"><img src="img/tenor13.gif" /><button id="btn14" data-but="img/tenor14.gif" class="design-button"><img src="img/tenor14.gif" /><button id="btn15" data-but="img/tenor15.gif" class="design-button"><img src="img/tenor15.gif" /><button id="btn16" data-but="img/tenor16.gif" class="design-button"><img src="img/tenor16.gif" /><button id="btn17" data-but="img/tenor17.gif" class="design-button"><img src="img/tenor17.gif" /><button id="btn18" data-but="img/tenor18.gif" class="design-button"><img src="img/tenor18.gif" /><button id="btn19" data-but="img/tenor19.gif" class="design-button"><img src="img/tenor19.gif" /><button id="btn20" data-but="img/tenor20.gif" class="design-button"><img src="img/tenor20.gif" />');

          zone.find('.parentimag').append($designBtn);

        
            zone.find('.parentimag').children($designBtn).on("click", function (e) {
            //$('#btn' + [i]).on("click", function (e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: 'main/design',
                    dataType: "json",
                    method: "POST",
                    data: 'design=' + $(this).data('but') + '&line-id=' + zone.data('line-id'),
                    complete: function (data) {
                        $result = data.responseJSON;
                        zone.find('.parentimag').children($designBtn).remove();
                        createDesign(zone, $result['design']);
                    }
                });
            });
        }
    

    function createDesign(zone, content) {
        zone.append('<img class="img-d img-fluid" src="' + content + '"</img>');
    }
    function createImageEmptyZone(zone) {
        zone.append('<img class="ill-mod-photo" src="img/polaroid.png"><form method="post"  enctype="multipart/form-data"><div class="form-group file-parent"></div></form>');
        $fileInput = $('<input type="file" class="form-control-file">');
        zone.find('.file-parent').append($fileInput);

        $fileInput.on('change', { dragged: zone }, function (e) {
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
                        e.data.dragged.children('img').remove();
                        e.data.dragged.children('form').remove();
                        createImage(e.data.dragged, data['content']);
                    });
            };
        });
    }

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

                height: "100%",
                width: "100%",
            }, 1000);
        }
        else {
            $dragged.css({

                height: "100%",
                width: "100%"
            });
        }

        /*close btn / happening on module*/
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

        $dragged
            .append($closeButton);
            

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
                console.log($result);

                // empty all areas
                for ($s = 1; $s <= 6; $s++) {
                    var zone = $('div[data-zone=' + $s + ']');
                    zone.html('');
                    zone.droppable('option', 'disabled', false);
                }

                if ($result.length) {

                    //Pour tous les modules
                    for (var i = 0; i < $result.length; i++) {

                        //On identifie sa zone
                        var zone = $('div[data-zone="' + $result[i]['zone_id'] + '"]');

                        //On crée une div intermédiaire (dans laquelle on append TextArea etc.) en clonant les icones à gauche
                        //cela permet d'avoir le meme comportement en drag&drop et en choix de semaine
                        $cloneDragged = $('#aside').find('div[data-mod=' + $result[i]['module_id'] + ']').clone();

                        prepareForInput($cloneDragged, zone, false);
                        $cloneDragged.attr('data-line-id', $result[i]['id']);

                        //on remplit cette div intermédiaire avec l'élément qui correspond à la catégorie module_id

                        if ($result[i]['module_id'] == 1) {
                            createTextArea($cloneDragged, $result[i]['content']);
                        }
                        if ($result[i]['module_id'] == 2) {
                            if ($result[i]['content']) {
                                createImage($cloneDragged, $result[i]['content']);
                            }
                            else {
                                createImageEmptyZone($cloneDragged);
                            }
                        }
                        if ($result[i]['module_id'] == 3) {
                            if ($result[i]['content']) {
                                createDesign($cloneDragged, $result[i]['content']);
                            }
                            else {
                                createEmptyDesign($cloneDragged);
                            }
                        }

                    }
                }
            }
        });

    }


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

    
    for (i = 1; i <= 4; i++) {

        highlight($("#draggable" + i));
    }



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
                highlight($clone);


                prepareForInput($dragged, $(this), true);

                /*behaviour by draggable category and ajax request for each*/

                /*cat 1 module textarea*/
                if ($dragged.data('category') == "1") {
                    createTextArea($dragged, '');
                };

                /*cat 2 module image*/
                if ($dragged.data('category') == "2") {
                    createImageEmptyZone($dragged);    
                };

                /*cat 3 module design*/
                if ($dragged.data('category') == "3") {
                    createEmptyDesign($dragged);
                };

                /*cat 4 module mood*/
                if ($dragged.data('category') == "4") {
                  $dragged.append('<div id="moodDrag"></div>');
                
                   $.get("mood.blade.php", function (data) {
                      $dragged.find('#moodDrag').html(data);
                   });

                 } /*close cat4*/   



            zIndex: 1001
                    //dragged on dropzone + week-id save
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
                        }
                    });
                    $.ajax({
                        url: '/main/ajax',/*Main Controller -> InsertDrop*/
                        data: 'zone=' + $droppedOnData + '&module=' + $draggedData + '&weekId=' + window.weekNumber,
                        dataType: "json",
                        method: "POST",
                        complete: function (data) {
                            $result = data.responseJSON;
    
                            $dragged.attr('data-line-id', $result['id']);
                        }
                    });
    
                }
            });
               
        };
    
    /*Array : moods available*/
    /*MOOD TRACKER*/
    var mood = [
                'Heureux',
                'Energique',
                'Enervé',
                'Fatigué',
                'Malade',
                'Triste',
                'Inquiet',
                'Calme',
                'Amoureux',
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
                for($i=0 ; $i<select.length ; $i++){
                    $moodChoozen = $(select[$i]).val(); 
                    $zone = divMood[$i];
                  switch ($moodChoozen){
                    case '1': 
                    $($zone).css("background-image", "url('/heureux.png')").css("background-size", "cover").css("background-position","center");
                    break;
                    case '2': 
                    break;
                    $($zone).css("background-image", "url('/energique.png')").css("background-size", "cover").css("background-position","center");
                    case '3': 
                    $($zone).css("background-image", "url('/enerve.png')").css("background-size", "cover").css("background-position","center");
                    break;
                    case '4': 
                    $($zone).css("background-image", "url('/fatigue.png')").css("background-size", "cover").css("background-position","center");
                    break;
                    case '5': 
                    $($zone).css("background-image", "url('/malade.png')").css("background-size", "cover").css("background-position","center");
                    break;
                    $($zone).css("background-image", "url('/triste.png')").css("background-size", "cover").css("background-position","center");
                    case '6': 
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

        /*send data (moods) in BDD*/
    function eventListener(){

        $(document).on('submit', '#formMood', function(stay){
            

            $formdata = $('#formMood').serialize(); // here $(this) refere to the form its submitting
            
            $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
                        }
                    });
            $.ajax({
                type: 'POST',
                url: "/main/mood",
                // dataType: "formData",
                data: $formdata + '&weekId=' + window.weekNumber, 
                success: function (data) {
                    
                },
            });
             stay.preventDefault();
        }); 
    }
        



   

    $(document).on('change', '.cst-select-mood', moodDisplay);
 
    displayUserWeek();

});
