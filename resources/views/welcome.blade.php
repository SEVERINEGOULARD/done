<!--view welcome-->
<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Done</title>

        <script src="{{ asset('js/app.js') }}"></script>

       <!--FONTS-->
       <!--Cormorant :-->
       <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet">
       <!--Amatic :-->
       <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
       <!--Lien Fontawesome :-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Link stylesheet -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }


            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px; 
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

<body>
<div class="content container-fluid cst-content-main">

    <div class="row cst-bg-welcome">
        <!--LEFT ZONE-->
        <div class="col-md-6 col-xs-12">
            <div class="row cst-left">
                <div class="masthead">
                    <div class="masthead-bg">
                    </div>
                    <div class="container h-100">
                        
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="cst-content-welcome masthead-content text-white py-5 py-md-0">
                                        <img src="/logo1.png"  class="logo">
                                        <!-- <h1 class="mb-3">DONE</h1> -->
                                        <div class="text-left">
                                            <p class="mb-5">Bienvenue dans votre <br><strong>Bullet Journal</strong>. <br/>
                                        Un outil personnalisable <br>au service de votre organisation <br>et de votre imagination<br/>
                                        </p>
                                        </div>
                                        
                                        <div class="input-group input-group-newsletter">
                                            <div class="cst-btn-go">
                                               <a href='/register'><button class="btn btn-secondary cst-btn-welcome" type="button">C'est parti !</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row text-left">
                                    <div class="col-md-12">
                                        <div class="mention pl-3">
                                          <a href="cgu" target="_blank">Conditions générales</a><br>
                                          <a href="ml" target="_blank">Mentions légales</a>
                                          <p class="pt-2">2019 All rights reserved</p>
                                        </div>
                                    </div>
                                    
                                </div>

                                
                            </div>
                        
                    </div>
                </div>
            </div>
           

            
        </div>

        <!--RIGHT ZONE-->
        <div class="col-md-6 col-xs-12">
            <div class="row cst-row-right-welcome">
                <div class="col-md-12 text-right">
                    @if (Route::has('login'))
                    <div class="links cst-icons">
                        @auth 
                            <a href="/home">Home</a>
                            <a href="/main">Bullet journal</a>
                            <a href="/logout">Déconnexion</a>
                            @if (Route::has('admin'))
                                <a href="/admin">Dashboard</a>
                            @endif

                        @else
                            <a href="{{ route('login') }}">Connexion</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Inscription</a>
                            @endif
                        @endauth
                    @endif
                            <a href="/contact">Contact</a>

                    </div>
                </div>
            </div> 
        </div>
    </div>
</div><!--end container-fluid-->

<!-- </div> -->
</body>
</html>
