@inject('types', 'App\Type')
@extends('main.shop.layout')
@section('content')


<div class="site-wrap"  style="text-align:right;float:center !important">
  <div class="bg-light py-3" style="text-align:right">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="{{route('sale')}}">خانه</a> <span class="mx-2 mb-0">/</span> <a href="{{route('sale2',$type->sale->id)}}">{{$type->sale->name}}</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{$type->name}}</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="item-entry">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="{{asset("storage/$type->picture")}}" alt="Image" class="img-fluid">
            </a>

          </div>

        </div>

  <div class="col-md-6">
        <form  action="{{route('cart_add',$type->id)}}" method="post">
        @csrf

          <h2 class="text-black">{{$type->name}}</h2>

          <p>{{$type->text}}</p>

          <p><strong class="text-primary h4">{{$type->price}}</strong>تومان</p>

          <div class="mb-5">
            <div class="input-group mb-3" style="max-width: 120px;">
            <div class="input-group-prepend">
              <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
            </div>
            <input name="number" type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
            <div class="input-group-append">
              <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
            </div>
          </div>

          </div>
          <p><input type="submit" href="cart.html" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" value="اضافه به سبد خرید"></p>


</form>
</div>

      </div>
    </div>
  </div>

  <div class="site-section block-3 site-blocks-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12 block-3">
          <div class="nonloop-block-3 owl-carousel">

            @foreach($types->all()->take(6)->shuffle() as $type)
            <div class="item">
              <div class="item-entry">
                <a href="{{route('detail',$type->id)}}" class="product-item md-height bg-gray d-block">
                  <img src="{{asset("storage/$type->picture")}}" alt="Image" class="img-fluid">
                </a>
                <h2 class="item-title"><a href="#"> {{$type->name}}</a></h2>
                <strong class="item-price">{{$type->price}} تومان</strong>
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

</div>

@endsection
