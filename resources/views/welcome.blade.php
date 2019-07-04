@extends('master')
    @section('body')
        <div class="row">
            {{-- left side of the page --}}
            <div class="col-sm-8">                 
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
                <div>
                    <button type="button" class="btn btn-secondary"  onclick="displayJuly()">July</button>
                    <button type="button" class="btn btn-secondary"  onclick="displayAugust()">August</button>
                    <button type="button" class="btn btn-secondary"  onclick="displaySeptember()">September</button>
                    <button type="button" class="btn btn-secondary"  onclick="displayOctober()">October</button>
                </div>
                
                                <div id="july" style="display:block">
                                    @include('calendar.july')
                                </div>      
                                <div id="august" style="display:none">
                                    @include('calendar.august')         
                                </div>               
                                <div id="september" style="display:none">
                                    @include('calendar.september')     
                                </div>         
                                <div id="october" style="display:none">
                                    @include('calendar.october')                   
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
            function displayJuly() {
                document.getElementById("july").style.display = "block";
                document.getElementById("august").style.display = "none";
                document.getElementById("september").style.display = "none";
                document.getElementById("october").style.display = "none";
            }
            function displayAugust() {
                document.getElementById("july").style.display = "none";
                document.getElementById("august").style.display = "block";
                document.getElementById("september").style.display = "none";
                document.getElementById("october").style.display = "none";
            }
            function displaySeptember() {
                document.getElementById("july").style.display = "none";
                document.getElementById("august").style.display = "none";
                document.getElementById("september").style.display = "block";
                document.getElementById("october").style.display = "none";
            }
            function displayOctober() {
                document.getElementById("july").style.display = "none";
                document.getElementById("august").style.display = "none";
                document.getElementById("september").style.display = "none";
                document.getElementById("october").style.display = "block";
            }
        </script>
@endsection