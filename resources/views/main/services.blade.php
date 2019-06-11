@extends('main.layout')
@section('content')

<div class="services">
   <div class="container">
      <h1>خدمات بررسی شده</h1>
      @foreach($service->all() as $services)

      <div class="service_box1">

           <div class="col-md-6">
              <div class="service_1">
                  <div class="service_1-right">
                     <span class="icon_5"><i class="fa fa-phone"> </i></span>
                  </div>
                  <div class="service_1-left">
                     <h5><a href="#">{{$services->header}}</a></h5>
                     <p>  {{$services->text}} </p>
                  </div>
              </div>
          </div>
          @if($services->id %2 == 0)
          <div class="clearfix"> </div>
          @endif

   </div>
   @endforeach

</div>


@endsection
