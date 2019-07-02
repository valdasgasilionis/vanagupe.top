<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
{{--  --}}

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 80vh;
                margin: 0;
            }

            .full-height {
                height: 80vh;
            }

            /* .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            } */

           /*  .position-ref {
                position: relative;
            } */

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                width:70%;
                /* text-align: center; */
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
* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
  padding: 20px 25px;
  width: 100%;
  background-color:rgba(27, 101, 81, 1) ;
  text-align: center;
}

.month ul {
  margin: 0;
  padding: 0;
}

.month ul li {
  color: white;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}

.month .prev {
  float: left;
  padding-top: 10px;
}

.month .next {
  float: right;
  padding-top: 10px;
}

.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color: #ddd;
}

.weekdays li {
  display: inline-block;
  width: 13.6%;
  color: #666;
  text-align: center;
}

.days {
  padding: 10px 0;
  background: #eee;
  margin: 0;
}

.days li {
  list-style-type: none;
  display: inline-block;
  width: 13.6%;
  text-align: center;
  padding: 25px 0;
  margin-bottom: 5px;
  font-size:18px;
  font-weight: 900;
  color: #777;
}
.price  {
  font-size: 12px;
  font-style: italic;
  font-weight: 100;
  color:green;
}
.booked {
  color: red;
  font-size: 12px;
  font-weight: 400;
}

.days li .active {
  padding: 5px;
  background: #1abc9c;
  color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
  .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
  .weekdays li, .days li {width: 12.5%;}
  .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
  .weekdays li, .days li {width: 12.2%;}
}
/* Slideshow container */
.slideshow-container {
  max-width: 800px;
  /* position: relative; */
  align-content: center;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  /* margin:auto; */
  /* position: absolute; */
  /* top: 50%; */
  width: auto;
  /* margin-top: -22px; */
  padding: 16px;
  color:rgba(27, 101, 81, 1);
  font-weight: bold;
  font-size: 24px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  /* background-color: rgba(0,0,0,0.8); */
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
.images {
    position: absolute;
    top:20px;
    right:20px;
}

</style>
    </head>
    <body>
        @if (Session('register'))
        <div class="container bg-alert">
            {{session('register')}};
        </div>
        @endif
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Admin</a>

                   {{--      @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif --}}
                    @endauth
                </div>
            @endif
        </div>
        <div class="images">
            <img src="Palanga.jpg" style="width:150px;height:auto">
        </div>
         

<div class="content">
               <!-- Slideshow container -->
    <div class="slideshow-container"> 
        <div>
            <h2>Vanagupe - aprašymas čia</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, repellendus eos sapiente 
                nesciunt voluptatem commodi possimus quaerat minima sequi 
                provident asperiores modi consectetur, voluptate odio maxime. Quos fugit asperiores mollitia?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, repellendus eos sapiente 
                nesciunt voluptatem commodi possimus quaerat minima sequi 
                provident asperiores modi consectetur, voluptate odio maxime. Quos fugit asperiores mollitia?
            </p>
        </div>
    <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <!-- The dots/circles -->
       {{--  <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
            <span class="dot" onclick="currentSlide(4)"></span>
        </div> --}}
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            @include('calendar.july')
        </div>      
        <div class="mySlides fade">
              @include('calendar.august')         
        </div>
      
        <div class="mySlides fade">
                @include('calendar.september')     
        </div>

        <div class="mySlides fade">
                @include('calendar.october')                   
        </div>       
    </div>              
</div>
        
        <script>
            var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
        </script>

    </body>
</html>
