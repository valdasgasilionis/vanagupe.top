<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">        
        <!-- Styles -->
        <link href="css/main.css" rel="stylesheet">       
    </head>
    <body>        
        <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
            <a class="navbar-brand" href="/">@lang('messages.name')</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto float-right">
                    <li class="nav-item">
                        <a class="nav-link" href="/gallery">@lang('messages.img')</a>
                    </li>  
                    <li class="nav-item">
                        <a class="nav-link" href="/privacy">@lang('messages.privacy')</a>
                    </li>  
                    <li class="nav-item">
                        <a class="nav-link" href="setlocale/lt"><img src="lithuania.png"></a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="setlocale/en"><img src="england.png"></a>
                    </li>              
                </ul>
                    <div class="flex-center position-ref full-height">
                        <span style="color:#fff;line-height:2">@lang('messages.Host'):Rugilė;&nbsp;&nbsp;&nbsp;<i>email:gabute@yahoo.com;&nbsp;&nbsp;</i>tel:<b>+370-655-43401</b></span> 
                       {{--  @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                @else
                                    <a href="{{ route('login') }}">Admin</a>

                                 @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif --}}
                    </div>                
            </div>
        </nav>
        
        @yield('body')      
        <script>
                function displayJuly() {
                    document.getElementById("july").style.display = "block";
                    document.getElementById("august").style.display = "none";
                    document.getElementById("september").style.display = "none";
                    document.getElementById("october").style.display = "none"; 
                /* change button color */
                    document.getElementById("julybutton").style.backgroundColor = "rgba(176, 208, 175, 0.67)"; 
                    document.getElementById("augustbutton").style.backgroundColor = "rgba(27, 101, 81, 1)"; 
                    document.getElementById("septemberbutton").style.backgroundColor = "rgba(27, 101, 81, 1)";
                    document.getElementById("octoberbutton").style.backgroundColor = "rgba(27, 101, 81, 1)";             
                }
                function displayAugust() {
                    document.getElementById("july").style.display = "none";
                    document.getElementById("august").style.display = "block";
                    document.getElementById("september").style.display = "none";
                    document.getElementById("october").style.display = "none";  
                     /* change button color */
                    document.getElementById("julybutton").style.backgroundColor = "rgba(27, 101, 81, 1)"; 
                    document.getElementById("augustbutton").style.backgroundColor = "rgba(176, 208, 175, 0.67)"; 
                    document.getElementById("septemberbutton").style.backgroundColor = "rgba(27, 101, 81, 1)";
                    document.getElementById("octoberbutton").style.backgroundColor = "rgba(27, 101, 81, 1)";         
                }
                function displaySeptember() {
                    document.getElementById("july").style.display = "none";
                    document.getElementById("august").style.display = "none";
                    document.getElementById("september").style.display = "block";
                    document.getElementById("october").style.display = "none";       
                     /* change button color */
                    document.getElementById("julybutton").style.backgroundColor = "rgba(27, 101, 81, 1)"; 
                    document.getElementById("augustbutton").style.backgroundColor = "rgba(27, 101, 81, 1)"; 
                    document.getElementById("septemberbutton").style.backgroundColor = "rgba(176, 208, 175, 0.67)";
                    document.getElementById("octoberbutton").style.backgroundColor = "rgba(27, 101, 81, 1)";        
                }
                function displayOctober() {
                    document.getElementById("july").style.display = "none";
                    document.getElementById("august").style.display = "none";
                    document.getElementById("september").style.display = "none";
                    document.getElementById("october").style.display = "block";  
                     /* change button color */
                    document.getElementById("julybutton").style.backgroundColor = "rgba(27, 101, 81, 1)"; 
                    document.getElementById("augustbutton").style.backgroundColor = "rgba(27, 101, 81, 1)"; 
                    document.getElementById("septemberbutton").style.backgroundColor = "rgba(27, 101, 81, 1)";
                    document.getElementById("octoberbutton").style.backgroundColor = "rgba(176, 208, 175, 0.67)";            
                }
            </script>
    </body>
</html>
