<!DOCTYPE html>
<html>
<head>
<style>
* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
  padding: 70px 25px;
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
  font-weight: 500;
  font-style: italic;
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
</style>
</head>
<body>

<div class="month">      
  <ul>
    {{-- <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li> --}}
    <li>
      August<br>
      <span style="font-size:18px">2019</span>
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
  <li>1</br><span class="price">60 &euro;</span></li>
  <li>2</br><span class="booked">not available</span></li>
  <li>3</br><span class="booked">not available</span></li>
  <li>4</br><span class="price">60 &euro;</span></li>
  <li>5</br><span class="price">60 &euro;</span></li>
  <li>6</br><span class="price">60 &euro;</span></li>
  <li>7</br><span class="price">60 &euro;</span></li>
  <li>8</br><span class="price">60 &euro;</span></li>
  <li>9</br><span class="price">60 &euro;</span></li>
  <li>10</br><span class="price">60 &euro;</span></li>
  <li>11</br><span class="price">60 &euro;</span></li>
  <li>12</br><span class="price">60 &euro;</span></li>
  <li>13</br><span class="booked">not available</span></li>
  <li>14</br><span class="booked">not available</span></li>
  <li>15</br><span class="price">60 &euro;</span></li>
  <li>16</br><span class="price">60 &euro;</span></li>
  <li>17</br><span class="price">60 &euro;</span></li>
  <li>18</br><span class="price">60 &euro;</span></li>
  <li>19</br><span class="price">60 &euro;</span></li>
  <li>20</br><span class="price">60 &euro;</span></li>
  <li>21</br><span class="price">60 &euro;</span></li>
  <li>22</br><span class="price">60 &euro;</span></li>
  <li>23</br><span class="price">60 &euro;</span></li>
  <li>24</br><span class="price">60 &euro;</span></li>
  <li>25</br><span class="price">60 &euro;</span></li>
  <li>26</br><span class="price">60 &euro;</span></li>
  <li>27</br><span class="price">60 &euro;</span></li>
  <li>28</br><span class="price">60 &euro;</span></li>
  <li>29</br><span class="price">60 &euro;</span></li>
  <li>30</br><span class="price">60 &euro;</span></li>
  <li>31</br><span class="price">60 &euro;</span></li>
</ul>

</body>
</html>
