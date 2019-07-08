@extends('master')
    @section('body')
        <div class="row">
            {{-- left side of the page --}}
            <div class="col-sm-8"> 
                      <h2>@lang('messages.Title')</h2>           
                <div class="description">  
                    <div class="grid-container">  
                            <div><i class="fas fa-box-open"></i></div>
                            <div>@lang('messages.new_construction')</div> 
                            <div><i class="fas fa-water"></i></div>
                            <div>@lang('messages.see')</div>   
                            <div><i class="far fa-building"></i></div>
                            <div>@lang('messages.floor')</div>  
                            <div><i class="far fa-gem"></i></div>
                            <div>@lang('messages.luxury')</div> 
                            <div><i class="fas fa-wifi"></i></div>
                            <div>@lang('messages.wifi')</div>                                       
                            <div><i class="fas fa-ruler-combined"></i></div>
                            <div>@lang('messages.area')</div>
                            <div><i class="fa fa-bed"></i></div>
                            <div>@lang('messages.bed')</div>
                            <div><i class="fa fa-couch"></i></div>
                            <div>@lang('messages.sofa')</div>
                            <div><i class="fa fa-shower"></i></div>
                            <div>@lang('messages.bath')</div>
                            <div><i class="fas fa-mug-hot"></i></div>
                            <div>@lang('messages.kitchen')</div>
                            <div><i class="fas fa-snowflake"></i></div>
                            <div>@lang('messages.a/c')</div>
                            <div><i class="fas fa-exchange-alt"></i></div>
                            <div>@lang('messages.recup')</div>
                            <div><i class="fa fa-tv"></i></div>
                            <div>@lang('messages.lcd')</div>
                            <div><i class="	fas fa-glass-cheers"></i></div>
                            <div>@lang('messages.balcony')</div>
                            <div><i class="fas fa-car-alt"></i></div>
                            <div>@lang('messages.parking')</div>
                    </div>                    
                </div>
                {{-- images --}}
                <div class="row">
                    <div class="col-sm-4 myimages">
                        <img src="vanagupe6.jpg" style="width:100%;height:auto">
                    </div>
                    <div class="col-sm-4 myimages">
                        <img src="vanagupe11.jpg" style="width:100%;height:auto">
                    </div>        
                    <div class="col-sm-4 myimages">
                        <img src="vanagupe3.jpg" style="width:100%;height:auto">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 myimages">
                        <img src="vanagupe4.jpg" style="width:100%;height:auto">
                    </div>                  
                    <div class="col-sm-4 myimages">
                        <img src="vanagupe9.jpg" style="width:100%;height:auto">
                    </div>
                    <div class="col-sm-4 myimages">
                        <img src="vanagupe1.jpg" style="width:100%;height:auto">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 myimages">
                        <img src="vanagupe7.jpg" style="width:100%;height:auto">
                    </div>                  
                    <div class="col-sm-4 myimages">
                        <img src="vanagupe8.jpg" style="width:100%;height:auto">
                    </div>
                    <div class="col-sm-4 myimages">
                        <img src="vanagupe5.jpg" style="width:100%;height:auto">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 myimages">
                        <img src="vanagupe2.jpg" style="width:100%;height:auto">
                    </div>                  
                    <div class="col-sm-4 myimages">
                        <img src="vanagupe14.jpg" style="width:100%;height:auto">
                    </div>
                    <div class="col-sm-4 myimages">
                        <img src="vanagupe12.jpg" style="width:100%;height:auto">
                    </div>
                </div>
                              
            </div>              
               
            {{-- right side of the page --}}
            <div class="col-sm-4">
                {{-- calendar --}}
                <div class="monthslinks">
                    <span class="booked">&#9940;  Not available;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="price">XX &euro;</span>
                            <span class="price">  price in EUR/day.</span><br/>
                        <button  id="julybutton" onclick="displayJuly()">July</button>
                        <button  id="augustbutton" onclick="displayAugust()">August</button>
                        <button  id="septemberbutton" onclick="displaySeptember()">September</button>
                        <button id="octoberbutton" onclick="displayOctober()">October</button>
                            
    
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
                {{-- end calendar --}}
{{-- google map  --}}
    <div class="row">
        <img src="https://maps.googleapis.com/maps/api/staticmap?center=55.9364263,21.0683849&zoom=14&size=800x400&maptype=roadmap&markers=size:small%7Ccolor:green%7C55.936528,21.069650&key={{config('app.google_api_key')}}" style="width:100%; padding:10px 15px">
    </div>
   
{{-- end google map --}}
                 {{-- request form --}}
                
                 <div class="bg-info" style="padding:20px">
                        <h5 style="text-align:center"><i>Send Your inquiry</i></h5> 
                            <form action="/form" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email address</label>
                                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>   
                                <div class="form-group">
                                        <label for="exampleFormControlInput1">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="+370-111-12345" required>
                                        <label for="exampleFormControlInput1">Your name</label>
                                        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Jonh Smith" required>
                                </div>                        
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Your request here</label>
                                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="privacy">
                                    <label for="privacy">I agree to <a href="/privacy" style="color:red">Privacy Policy</a></label>
                                    
                                </div>
                                <button type="submit" class="btn btn-warning mb-2">Submit</button>
                            </form>
                    </div> 
                    <div>
                        &nbsp;
                    </div>  
                    {{-- end request form --}} 
                
                    
            </div>
        </div>                 
     
@endsection