@extends('main.layout')
@section('content')


@foreach($about->all() as $abouts)

<div class="courses_box1">
   <div class="container">
      <div class="col-md-6 about_right">
        <h1>{{$abouts->header}}</h1>
        <p>{{$abouts->text}}</p>
        <!-- <ul class="about_links">
              <li><a href="#">Ut wisi enim ad minim veniam, quis nostrud</a></li>
              <li><a href="#">Exerci tation ullamcorper suscipit lobortis nisl aliquip</a></li>
              <li><a href="#">Duis autem vel eum iriure dolor</a></li>
          </ul> -->
          <!-- <a href="#" class="radial_but">Read More</a> -->
        </div>
      <div class="col-md-6">
        <img src="{{asset("storage/$abouts->picture")}}" class="img-responsive" alt=""/>
      </div>
      <div class="clearfix"> </div>
   </div>
</div>

@endforeach






<div class="bg_1">
  <div class="container">
    <h2>Our Team</h2>


     @foreach($ourteam->all() as $ourteams)
      <div class="col-md-3 team_grid">
    <div class="team">
              <img src="{{asset("storage/$ourteams->picture")}}" class="img-responsive" alt=""/>
                 <div class="team_box">
                   <h3>{{$ourteams->name}}</h3>
                   <p>{{$ourteams->major}}</p>
                   <ul class="team-socials">
                      <li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
                      <li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
                      <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
                   </ul>
                 </div>
          </div>
      </div>
    @endforeach
  <div class="clearfix"> </div>

  </div>
</div>



<div class="advantage">
  <h3>Advantages</h3>
  <div class="container">

    @foreach($advantage->all() as $advantages)
    <div class="col-md-4 box_1">
      <div class="list styled custom-list custom-list1">
      <ul>
        <li><span class="dropcap">{{$advantages->number}}</span>
           <div class="item_content">
          <h5><a href="#">{{$advantages->header}}</a></h5>
          <p> {{$advantages->text}}</p>
          <!-- <p class="m_1">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock</p> -->
           </div>
        </li>
        </ul>
    </div>
     </div>
     @endforeach

     <div class="clearfix"> </div>
  </div>
</div>



@endsection
