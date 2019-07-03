<div class="month">      
        <ul>
          <li>
              <i>August</i><span style="font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2019</span>
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
        <li>&nbsp;</li>
        <li>&nbsp;</li>
        @for ($i = 1; $i < 32; $i++)
                <li class="{{$rentals[$i+30]->reserved ? 'booked_days' : 'price_days'}}">{{$i}}</br>
                  <span class="{{$rentals[$i+30]->reserved ? 'booked' : 'price'}}">
                    @if ($rentals[$i+30]->reserved === 1)
                        &#9940
                    @else
                        {{$rentals[$i+30]->price}} &euro;
                    @endif                  
                  </span>
                </li>
              @endfor       
      </ul> 