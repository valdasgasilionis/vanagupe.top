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
                <div class="monthslinks">
                    <button  id="julybutton" onclick="displayJuly()">July</button>
                    <button  id="augustbutton" onclick="displayAugust()">August</button>
                    <button  id="septemberbutton" onclick="displaySeptember()">September</button>
                    <button id="octoberbutton" onclick="displayOctober()">October</button>
                        <span class="booked"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &#9940;  Not available &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span>
                        <span class="price">XX &euro;</span>
                        <span class="price">  price in EUR/day. Additional final cleaning fee 30 EUR.</span>

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
               
            {{-- right side of the page --}}
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-6 myimages">
                        <img src="vanagupe1.jpg" style="width:100%;height:auto">
                    </div>
                    <div class="col-sm-6 myimages">
                        <img src="vanagupe2.jpg" style="width:100%;height:auto">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 myimages">
                        <img src="vanagupe3.jpg" style="width:100%;height:auto">
                    </div>
                    <div class="col-sm-6 myimages">
                        <img src="vanagupe4.jpg" style="width:100%;height:auto">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 myimages">
                        <img src="vanagupe5.jpg" style="width:100%;height:auto">
                    </div>
                    <div class="col-sm-6 myimages">
                        <img src="vanagupe6.jpg" style="width:100%;height:auto">
                    </div>
                </div>
            </div>
        </div>                 
     
@endsection