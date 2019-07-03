<div class="month">      
        <ul>
            <li>
            <i>October</i><span style="font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2019</span>
            </li>
        </ul>
    </div>
          
          <ul class="weekdays">
            <li>Mo</li>
            <li>Tu</li>
            <li>We</li>
            <li>Th</li>
            <li>Fr</li>
            <li>Sa</li>
            <li>Su</li>
          </ul>
          
          <ul class="days">  
            <li>&nbsp;</li>
              @for ($i = 1; $i < 32; $i++)
                <li class="{{$rentals[$i+91]->reserved ? 'booked_days' : 'price_days'}}">{{$i}}</br>
                  <span class="{{$rentals[$i+91]->reserved ? 'booked' : 'price'}}">
                    @if ($rentals[$i+91]->reserved === 1)
                        &#9940
                    @else
                        {{$rentals[$i+91]->price}} &euro;
                    @endif   
                    @if (auth()->check())
                    <form action="/edit" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$rentals[$i+91]->id}}" readonly>
                      <input class="admin" type="text" name="price" value="{{$rentals[$i+91]->price}}">
                    </br>
                      <input class="admin" type="date" name="date" value="{{$rentals[$i+91]->date}}" readonly>
                    </br>
                      <input class="admin" type="submit" value="submit">
                    </form>
                  </br>
                      reserved?
                  <form action="/reserved" method="post">
      <input type="checkbox" name="reserved" {{$rentals[$i+91]->reserved ? 'checked' : ''}} onChange="this.form.submit()">
                  </form>
                @endif               
                  </span>
                </li>
              @endfor            
          </ul>  