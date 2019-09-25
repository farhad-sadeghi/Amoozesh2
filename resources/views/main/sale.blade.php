@inject('types', 'App\Type')
@extends('main.layout')
@section('content')


  <div class="site-blocks-cover inner-page" data-aos="fade">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto order-md-2 align-self-start">
          <div class="site-block-cover-content">
          <h1>رایان رهجو</h1>
        <p><a href="{{route('sale')}}" class="btn btn-black rounded-0">صفحه اصلی</a></p>
          </div>
        </div>
        <div class="col-md-6 order-1 align-self-end">
          <img src="{{asset('images2/Computer_Desktop_PC_PNG_37552.png')}}" alt="Image" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <div class="custom-border-bottom py-3" style="text-align:right">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="{{route('sale')}}">خانه</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{$sale1->name}}</strong></div>
      </div>
    </div>
  </div>


  <div class="site-section">
    <div class="container">

      <div class="row mb-5">
        <div class="col-md-12 order-1">


          <div class="row mb-5">

           @foreach($type->all() as $types)
            <div class="col-lg-5 col-md-6 item-entry mb-4" style="text-align:right;float:center">
              <a href="{{route('detail',$types->id)}}" class="product-item md-height bg-gray d-block">
                <img src='{{asset("storage/$types->picture")}}' alt="Image" class="img-fluid">
              </a>
              <h2 class="item-title"><a href="#">{{$types->name}}</a></h2>
              <strong class="item-price" style="color:red;">{{$types->price}} تومان</strong>
            </div>

            @endforeach

          </div>
          <div class="row">
            <div class="col-md-12 text-center">
  {{$type->appends(Request::input())->links()}}
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>

  <div class="site-section" style="text-align:right;float:center !important">
    <div class="container">

      <div class="row">

        @foreach($types->all()->shuffle()->take(6) as $type)
        <div class="col-lg-4 col-md-6 item-entry mb-4">
          <a href="{{route('detail',$type->id)}}" class="product-item md-height bg-gray d-block">
            <img src="{{asset("storage/$type->picture")}}" alt="Image" class="img-fluid">
          </a>
          <h2 class="item-title"><a href="#"> {{$type->name}}</a></h2>
          <strong class="item-price" style="color:red;">{{$type->price}} تومان</strong>
        </div>
  @endforeach
      </div>
    </div>
  </div>

</div>



@endsection
