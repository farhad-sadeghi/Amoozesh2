@extends('main.layout')
@section('content')


    <!-- //banner -->
    <div class="courses_box1">
       <div class="container">
          <div class="col-md-4">
            <div class="cal1 cal_2"><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">قبلی</p></div><div class="month">September 2015</div><div class="clndr-control-button leftalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day past adjacent-month last-month calendar-day-2015-08-30"><div class="day-contents">30</div></td><td class="day past adjacent-month last-month calendar-day-2015-08-31"><div class="day-contents">31</div></td><td class="day today calendar-day-2015-09-01"><div class="day-contents">1</div></td><td class="day calendar-day-2015-09-02"><div class="day-contents">2</div></td><td class="day calendar-day-2015-09-03"><div class="day-contents">3</div></td><td class="day calendar-day-2015-09-04"><div class="day-contents">4</div></td><td class="day calendar-day-2015-09-05"><div class="day-contents">5</div></td></tr><tr><td class="day calendar-day-2015-09-06"><div class="day-contents">6</div></td><td class="day calendar-day-2015-09-07"><div class="day-contents">7</div></td><td class="day calendar-day-2015-09-08"><div class="day-contents">8</div></td><td class="day calendar-day-2015-09-09"><div class="day-contents">9</div></td><td class="day event calendar-day-2015-09-10"><div class="day-contents">10</div></td><td class="day event calendar-day-2015-09-11"><div class="day-contents">11</div></td><td class="day event calendar-day-2015-09-12"><div class="day-contents">12</div></td></tr><tr><td class="day event calendar-day-2015-09-13"><div class="day-contents">13</div></td><td class="day event calendar-day-2015-09-14"><div class="day-contents">14</div></td><td class="day calendar-day-2015-09-15"><div class="day-contents">15</div></td><td class="day calendar-day-2015-09-16"><div class="day-contents">16</div></td><td class="day calendar-day-2015-09-17"><div class="day-contents">17</div></td><td class="day calendar-day-2015-09-18"><div class="day-contents">18</div></td><td class="day calendar-day-2015-09-19"><div class="day-contents">19</div></td></tr><tr><td class="day calendar-day-2015-09-20"><div class="day-contents">20</div></td><td class="day event calendar-day-2015-09-21"><div class="day-contents">21</div></td><td class="day event calendar-day-2015-09-22"><div class="day-contents">22</div></td><td class="day event calendar-day-2015-09-23"><div class="day-contents">23</div></td><td class="day calendar-day-2015-09-24"><div class="day-contents">24</div></td><td class="day calendar-day-2015-09-25"><div class="day-contents">25</div></td><td class="day calendar-day-2015-09-26"><div class="day-contents">26</div></td></tr><tr><td class="day calendar-day-2015-09-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-09-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-09-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-09-30"><div class="day-contents">30</div></td><td class="day adjacent-month next-month calendar-day-2015-10-01"><div class="day-contents">1</div></td><td class="day adjacent-month next-month calendar-day-2015-10-02">
              <div class="day-contents">2</div></td><td class="day adjacent-month next-month calendar-day-2015-10-03">
                <div class="day-contents">3</div></td></tr></tbody></table></div></div>


      </div>
      <div class="col-md-2">

      </div>
      <div class="col-md-6 detail">
        <!-- <div class="courses_box1"> -->
      	   <div class="container">
      		<div class="col-lg-12 detail col-xs-12" >
      	       <img src="{{asset("storage/$type->picture")}}"  alt=""/>
      	       <h3> {{$type->name}}</h3>
      	        <ul class="meta-post">
                      <li class="author">
                        داوود گودرزی
                      </li>
                      <li class="view">
                         قیمت : {{$type->price}}
                      </li>
                 </ul>

                 <div class="author-box author-box1">
                        <div class="author-box-right"><img src="images/t13.png" class="img-responsive" alt=""/></div>
      				  <div class="author-box-left">
      					<h4>نوشته شده توسط داوود گودرزی</h4>
                <p>{{$type->text}}</p>
      				  </div>
                <a class="shortcode_but medium" href="#" target="_self" style="color:#ffffff; background-color:#94d64f;margin-top: 30px;margin-right: 290px;">اضافه به سبد خرید </a>

      				  <div class="clearfix"> </div>
      			 </div>
      		 </div>
      	     <div class="clearfix"> </div>
      	   </div>
      	<!-- </div> -->

       </div>
         <div class="clearfix"> </div>
       </div>
    </div>









  @endsection
