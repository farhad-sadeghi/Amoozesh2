@inject('types', 'App\Type')
@extends('main.layout')
@section('content')

<div class="site-blocks-cover" data-aos="fade">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto order-md-2 align-self-start">
        <div class="site-block-cover-content">
        <h2 class="sub-title"> 20 سال سابقه در بروجرد</h2>
        <h1> رایان رهجو</h1>
        <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
        </div>
      </div>
      <div class="col-md-6 order-1 align-self-end">
        <img src="images2/model_3.png" alt="Image" class="img-fluid">
      </div>
    </div>
  </div>
</div>

<!-- <div class="site-blocks-cover" data-aos="fade">
  <div class="container">
    <div class="row">
        <img src="images2/IMG_20190820_091006_058.jpg" alt="Image" class="img-fluid">
    </div>
  </div>
</div> -->







<div class="site-section" style="text-align:right;float:center !important">
  <div class="container">
    <div class="row">

      @foreach($types->all()->take(6)->shuffle() as $type)
      <div class="col-lg-4 col-md-6 item-entry mb-4">
        <a href="{{route('detail',$type->id)}}" class="product-item md-height bg-gray d-block">
          <img src="{{asset("storage/$type->picture")}}" alt="Image" class="img-fluid">
        </a>
        <h2 class="item-title"><a href="#"> {{$type->name}}</a></h2>
        <strong class="item-price">{{$type->price}} تومان</strong>
      </div>
@endforeach

    </div>
  </div>
</div>




<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 block-3">
        <div class="nonloop-block-3 owl-carousel">



          @foreach($types->all()->shuffle() as $type)
          <div class="item" style="text-align:right;float:center !important">
            <div class="item-entry">
              <a href="{{route('detail',$type->id)}}" class="product-item md-height bg-gray d-block">
                <img src="{{asset("storage/$type->picture")}}" alt="Image" class="img-fluid">
              </a>
              <h2 class="item-title"><a href="#"> {{$type->name}}</a></h2>
              <strong class="item-price">{{$type->price}} تومان </strong>
              <div class="star-rating">
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
              </div>
            </div>
          </div>
       @endforeach



        </div>
      </div>
    </div>
  </div>
</div>


  @endsection
