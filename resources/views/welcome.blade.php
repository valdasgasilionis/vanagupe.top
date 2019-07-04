@extends('master')
    @section('body')
        <div class="row">
            {{-- left side of the page --}}
            <div class="col-sm-8">
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
                                <span class="booked"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &#9940;  Not available &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </span>
                                <span class="price">XX &euro;</span>
                                <span class="price">  price in EUR/day. Additional final cleaning fee 30 EUR.</span>
                    
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
            </div>
            {{-- right side of the page --}}
            <div class="col-sm-4">
                <div class="images">
                    <img src="Palanga.jpg" style="width:150px;height:auto">
                </div>
            </div>
        </div> 
         

            {{-- carousel script below --}}
                    
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
            /* var dots = document.getElementsByClassName("dot"); */
            /* this is the original code to loop cycle the frames */
            /*  if (n > slides.length) {slideIndex = 1} 
            if (n < 1) {slideIndex = slides.length} */
            if (n > slides.length) {slideIndex = 4} //stop at the last month
            if (n < 1) {slideIndex = 1} //does not go back to the last month
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none"; 
            }
           /*  for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            } */
            slides[slideIndex-1].style.display = "block"; 
            /* dots[slideIndex-1].className += " active"; */
            }
        </script>
@endsection