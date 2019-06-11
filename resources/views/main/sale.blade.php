@extends('main.layout')
@section('content')

  <!-- //banner -->
<div class="admission">
   <div class="container">
     <div class="faculty_top">


      <!-- <div class="col-md-4 faculty_grid">
        <figure class="team_member">
          <img src="images/fc.jpg" class="img-responsive wp-post-image" alt=""/>
          <div></div>
          <figcaption><h3 class="person-title"><a href="event_single.html">محتوا </a></h3>
            <span class="person-deg">مدرک</span>
            <span class="person-deg">مدرک</span>
            <span class="person-deg">مدرک</span>
            <span class="person-deg">مدرک</span>
            <span class="person-deg">مدرک</span>
            <span class="person-deg">مدرک</span>
            <p><a href=" info@barnamenevisan.org">info@barnamenevisan.org</a></p>
            <p>4 Years</p>
            <div class="person-social">
              <ul class="social-person">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
           </figcaption>
         </figure>
      </div> -->




      <!-- <div class="col-md-4 faculty_grid">
        <figure class="team_member">
          <img src="images/fc1.jpg" class="img-responsive wp-post-image" alt=""/>
          <div></div>
          <figcaption><h3 class="person-title"><a href="event_single.html">محتوا </a></h3>
            <span class="person-deg">مدرک</span>
            <p><a href=" info@barnamenevisan.org">info@barnamenevisan.org</a></p>
            <p>4 Years</p>
            <div class="person-social">
              <ul class="social-person">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
           </figcaption>
         </figure>
      </div> -->




      @foreach($type->all() as $types )
      <div class="col-md-4 faculty_grid">
        <figure class="team_member">
          <img src="{{asset("storage/$types->picture")}}" class="img-responsive wp-post-image" alt=""/>
          <div></div>
          <figcaption><h3 class="person-title"><a href="{{route('detail',$types->id)}}">{{$types->name}} </a></h3>
            <span class="person-deg">{{$types->price}}</span>
            <p><a href=" info@barnamenevisan.org">{{$types->property1}}</a></p>
            <p>{{$types->property2}}</p>
            <div class="person-deg">
            <p>{{$types->property3}}</p>
            </div>
           </figcaption>
         </figure>
      </div>
      @if($types->id %3 == 0)
           <div class="clearfix"> </div><br>
           @endif
      @endforeach






     </div>






     <!-- <div class="faculty_top">
      <div class="col-md-4 faculty_grid">
        <figure class="team_member">
          <img src="images/fc3.jpg" class="img-responsive wp-post-image" alt=""/>
          <div></div>
          <figcaption><h3 class="person-title"><a href="event_single.html">محتوا </a></h3>
            <span class="person-deg">مدرک</span>
            <p><a href=" info@barnamenevisan.org">info@barnamenevisan.org</a></p>
            <p>4 Years</p>
            <div class="person-social">
              <ul class="social-person">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
           </figcaption>
         </figure>
      </div>
      <div class="col-md-4 faculty_grid">
        <figure class="team_member">
          <img src="images/fc4.jpg" class="img-responsive wp-post-image" alt=""/>
          <div></div>
          <figcaption><h3 class="person-title"><a href="event_single.html">محتوا </a></h3>
            <span class="person-deg">مدرک</span>
            <p><a href=" info@barnamenevisan.org">info@barnamenevisan.org</a></p>
            <p>4 Years</p>
            <div class="person-social">
              <ul class="social-person">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
           </figcaption>
         </figure>
      </div>
      <div class="col-md-4 faculty_grid">
        <figure class="team_member">
          <img src="images/fc5.jpg" class="img-responsive wp-post-image" alt=""/>
          <div></div>
        <figcaption><h3 class="person-title"><a href="event_single.html">محتوا </a></h3>
            <span class="person-deg">مدرک</span>
            <p><a href=" info@barnamenevisan.org">info@barnamenevisan.org</a></p>
            <p>4 Years</p>
            <div class="person-social">
              <ul class="social-person">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
           </figcaption>
         </figure>
      </div>
      <div class="clearfix"> </div>
     </div>
     <div class="faculty_bottom">
      <div class="col-md-4 faculty_grid">
        <figure class="team_member">
          <img src="images/fc6.jpg" class="img-responsive wp-post-image" alt=""/>
          <div></div>
          <figcaption><h3 class="person-title"><a href="event_single.html">محتوا </a></h3>
            <span class="person-deg">مدرک</span>
            <p><a href=" info@barnamenevisan.org">info@barnamenevisan.org</a></p>
            <p>4 Years</p>
            <div class="person-social">
              <ul class="social-person">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
           </figcaption>
         </figure>
      </div>
      <div class="col-md-4 faculty_grid">
        <figure class="team_member">
          <img src="images/fc7.jpg" class="img-responsive wp-post-image" alt=""/>
          <div></div>
          <figcaption><h3 class="person-title"><a href="event_single.html">محتوا </a></h3>
            <span class="person-deg">مدرک</span>
            <p><a href=" info@barnamenevisan.org">info@barnamenevisan.org</a></p>
            <p>4 Years</p>
            <div class="person-social">
              <ul class="social-person">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
           </figcaption>
         </figure>
      </div>
      <div class="col-md-4 faculty_grid">
        <figure class="team_member">
          <img src="images/fc8.jpg" class="img-responsive wp-post-image" alt=""/>
          <div></div>
          <figcaption><h3 class="person-title"><a href="event_single.html">محتوا </a></h3>
            <span class="person-deg">مدرک</span>
            <p><a href=" info@barnamenevisan.org">info@barnamenevisan.org</a></p>
            <p>4 Years</p>
            <div class="person-social">
              <ul class="social-person">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
           </figcaption>
         </figure>
      </div>
      <div class="clearfix"> </div>
     </div> -->

  </div>
  <ul class="pagination">
   <!-- <li class="active"><a href="#">1</a></li>
   <li><a href="#">2</a></li> -->
   {{$type->appends(Request::input())->links()}}
  </ul>
</div>




@endsection
