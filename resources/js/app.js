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

    for (i = 1; i <= 6; i++) {
        $("#dropZone" + i).droppable({
            zIndex: 1,
            tolerance: "fit",
			
            drop: function (event, ui) {
                $droppedOn = $(this);
                $dragged = ui.draggable;

                $droppedOnData = $droppedOn.data('zone');
                $draggedData = $dragged.data('mod');

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
                    width:"100%",
                }, 1000);

                /*close btn on modules*/
                $closeButton = $('<button type="button" class="btn-outline-danger cst-button">X</button>');
                $parent = $(this);
                $closeButton.on("click", $parent, function (parentButton) {
                    parentButton.data.droppable('option', 'disabled', false);
                    parentButton.data.empty();
                });


                if ($dragged.data('category') == "1") {
                    $dragged.append('<textarea class="cst-textarea" placeholder="Votre texte ici..."></textarea>');
                }


                if ($dragged.data('category') == "2") {
                    $dragged.append('<img class="ill-mod-photo" src="img/polaroid.png"><form method="post" action="" enctype="multipart/form-data"><div class="form-group file-parent"></div></form>');
                    $fileInput = $('<input type="file" class="form-control-file">');
                    $dragged.find('.file-parent').append($fileInput);

                    $fileInput.on('change', function (e) {
                       
                        console.log(e.target.files[0].name);

                    });
                }



                
                if ($dragged.data('category') == "3") {
                    $dragged.append('<div class"row"><button class="design-button"><img src="img/ville1.png" /></button><button class="design-button"><img src="img/texture1.jpg" /></button><button class="design-button"><img src="img/perso1.png"/></button><button class="design-button"><img src="img/arab2.png"/></button><button class="design-button"><img src="img/arab3.png"/></button></div><div class"row"><button class="design-button"><img src="img/chat1.jpg" /></button><button class="design-button"><img src="img/chat3.jpg" /></button><button class="design-button"><img src="img/livres.jpg" /></button></button><button class="design-button"><img src="img/arab4.png" /></button></button><button class="design-button"><img src="img/tempete.jpg" /></button><button class="design-button"><img src="img/tempete.jpg" /></button></button></button><button class="design-button"><img src="img/tempete.jpg" /></button><button class="design-button"><img src="img/tempete.jpg" /></button></button></button><button class="design-button"><img src="img/tempete.jpg" /></button></button></button><button class="design-button"><img src="img/tempete.jpg" /></button><button class="design-button"><img src="img/tempete.jpg" /></button></div>');
                }

                // $(".design-button").on("click", function(){


                // });

                $dragged
                    .append($closeButton)  
                    .addClass("text-right");

				$dragged.draggable("option", "disabled", true);
				$(this).droppable('option', 'disabled', true);
				
				// Ajax here
				// $droppedOn $dragged 
				$.ajaxSetup({

					headers: {
						'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
					}
				});
				
				$.ajax({
		  
					url : '/main/ajax',
					dataType: "json",
					method: "POST",
					data: 'zone=' + $droppedOnData + '&module=' + $draggedData + '&weekId=' + window.weekId, 
					complete: function(data) {
						$result = data.responseJSON;
						
						  
					}
				});
			}  
		})
	}

    
});

/*Ajax module1 Text

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});*/


    
    
/*
    
    files = [];                             //on déclare un tableau vide ! attention ce tableau files n'est pas le même que le .files de la ligne en-dessous !
    droppedFiles = e.dataTransfer.files;    // https://developer.mozilla.org/fr/docs/Web/API/DataTransfer/files
    var droppedItem;                        //on déclare une variable vide
    dropShow.innerHTML = "";                //on réïnitialise dropSow au cas ou il y aurait déjà qqch (sinon ça se cumule)

    for (var i = 0; i < droppedFiles.length; i++) { //Boucle for sur le tableau des infos recueilles

        droppedItem = document.createElement('p');  //on stocke dans la variable la création d'un élément <p>
        droppedItem.innerHTML = droppedFiles[i].name + '(' + droppedFiles[i].size + 'Kb)'; //on le rempli avec le nom et la taille du fichier
        dropShow.appendChild(droppedItem); //on en fait un enfant de dropShow pour qu'il s'affiche
        files.push(droppedFiles[i]); //On push toutes les infos dans le tableau vide, il va être récupérer plus haut pour l'ajax

    }//fin du for droppedFiles  

    }//fin du .ondrop

    $myData = new FormData();
    $myData.append('file', files[0]);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

              $.ajax({
                  method: 'POST',
                  url: '/main',
                  data: myData,
                  contentType: false,
                  processData: false,
              })

                  .done(function (data) {        
                      //recupérer le contenu du module et le supprimer
                      //lui faire un append du l'image reçue
                  })

                  .fail(function (data) {                                                     


                      /*$.each(data.responseJSON["errors"], function (key, value) {                 

                          for (i = 0; i < value.length; i++) {                                    
                              $("#error").append("<li>" + value[i] + "</li>");                
                          }
                      });*/ /*

                  })

    });

});*/
//fin du ready function

/*Ajax module3 Illustration

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});*/

/*Ajax module4 Mood

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});*/



/*Ajax toDo*/

//$(function(){
  
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
  //});
