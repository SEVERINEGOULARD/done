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
            // console.log($result);

            
                if(($result['toDo'] && $result['category'])){
                
                $('#list-items').append("<div class='row' class='list'><div class='col-sm-10 col-md-10'>" + $result['toDo'] + " </div><div class='col-sm-2 col-md-2'><a class='deleteList' data-delete='"+ $result['category'] +"'><i class='far fa-trash-alt'></i></a></div></div>");
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
                    $('#list-items').append("<div class='row' class='list'><div class='col-10'>" + $result[i]['content'] + " </div> <div class='col-2'><a class='deleteList' data-delete='"+ $result[i]['id'] +"'><i class='far fa-trash-alt'></i></a></div></div>"); 
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
});
