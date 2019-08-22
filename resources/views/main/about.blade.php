@extends('main.layout')
@section('content')


<div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade" style="text-align:right">
  <div class="container">
    <div class="row">


     @foreach($advantages->all() as $advantage)
      <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
        <div class="icon mr-4 align-self-start">
          <span class="icon-help"></span>
        </div>
        <div class="text">
          <h2 class="text-uppercase">{{$advantage->header}}</h2>
          <p>{{$advantage->text}}</p>
        </div>
      </div>
    @endforeach


    </div>
  </div>
</div>

 @foreach($abouts->all() as $about)
<div class="site-section custom-border-bottom" data-aos="fade" style="text-align:right">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6">
        <div class="block-16">
          <figure>
            <img src="{{asset("storage/$about->picture")}}" alt="Image placeholder" class="img-fluid rounded">
          </figure>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-5">
        <div class="site-section-heading pt-3 mb-4">
          <h2 class="text-black">{{$about->header}}</h2>
        </div>
        <p>{{$about->text}}</p>
      </div>
    </div>
  </div>
</div>
@endforeach


<div class="site-section custom-border-bottom" data-aos="fade" style="text-align:right">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 site-section-heading text-center pt-4">
        <h2>تیم ما</h2>
      </div>
    </div>
    <div class="row">


    @foreach($ourteams->all() as $ourteam)
      <div class="col-md-6 col-lg-3">
        <div class="block-38 text-center">
          <div class="block-38-img">
            <div class="block-38-header">
              <img src="{{asset("storage/$ourteam->picture")}}" alt="Image placeholder" class="mb-4">
              <h3 class="block-38-heading h4">{{$ourteam->header}}</h3>
              <p class="block-38-subheading">{{$ourteam->major}}</p>
            </div>
          </div>
        </div>
      </div>
    @endforeach

    </div>
  </div>
</div>





@endsection
