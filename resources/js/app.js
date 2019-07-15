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

                $dragged.animate({

                    backgroundColor: "#fff",
                    height: $(this).outerHeight(),
                    width: $(this).outerWidth(),
                }, 1000);

				/*changer la partie boutton*/
                $closeButton = $('<button type="button" class="btn btn-outline-danger">X</button>');
                $parent = $(this);
                $closeButton.on("click", function () {
                        $parent.droppable('option', 'disabled', true);
                        $parent.empty();
				});
				
                if ($dragged.data('category') == "1") {

                    $dragged.append('<textarea class="textarea" placeholder="Votre texte ici..."></textarea>');
                }
                
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

    if ($("#dropZone" + i) == "#droppable1") {
        $(this).append('<textarea placeholder="Votre texte ici..."></textarea>');

    }
});


/*Ajax toDo*/

$(function(){
  
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
             console.log($result);
                 $('#test').empty();
                if(($result['toDo'])){
                 
                 $('#test').append("<div class='col-md-4'><p>" + $result['toDo'] + "</p> </div> <div class='col-md-4'><input type='checkbox'></div><div class='col-md-4'><p id='deleteToDo'><i class='fas fa-trash'></i></p></div>");
                 }else{
                     $('#test').append("<div class='col-md-4'><p> Aucun message indiqué </p> </div> <div class='col-md-4'><input type='checkbox'></div><div class='col-md-4'><p id='deleteToDo'><i class='fas fa-trash'></i></p></div>");
                 }
            }     
        })
     })


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
             
          
               
            $('#test').empty();

            for(var i = 0; i < $result.length; i++) {
                 $('#test').append("<div class='col-md-4'><p>" + $result[i]['content'] + "</p> </div> <div class='col-md-4'><input type='checkbox'></div><div class='col-md-4'><a id='deleteToDo'><i class='fas fa-trash'></i></a></div>"); 
              }
           }     
       })
    })
  });
