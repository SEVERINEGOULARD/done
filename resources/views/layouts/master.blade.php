<!DOCTYPE html>
<html lang="fr">
   <head>
       <meta name="csrf-token" content="{{ csrf_token() }}">
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>@yield('title')</title>
       <link rel='stylesheet' href="{{URL::asset('css/app.css')}}">
       <!--Lien jQuery ui CSS -->
       <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <!--Lien Fontawesome :-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
       <!--FONTS-->
        <!--Homemade Apple :-->
       <link href="https://fonts.googleapis.com/css?family=Homemade+Apple&display=swap" rel="stylesheet">
       <!--Philosopher :-->
       <link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet">
       <!--Montez :-->
       <link href="https://fonts.googleapis.com/css?family=Montez&display=swap" rel="stylesheet">
       <!--Cormorant :-->
       <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet">
       <!--Amatic :-->
       <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">

       <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
       
       <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
       
       <!--script jquery ui -->
       <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
       
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </head>

   <body>
   @yield('scripts-header')

       <div id='content'>
           @yield('content')
       </div>

   @yield('scripts-footer')

   </body>
</html>
