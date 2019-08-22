@extends('main.layout')
@section('content')






<div class="site-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12">
        <div class="border p-4 rounded" role="alert" style="text-align:center;float:center !important">
     برای ورود <a href="{{route('login')}}">کلیک</a> کنید        </div>
      </div>
    </div>


    <div class="row mb-5">
      <form class="col-md-12" method="post">
        <div class="site-blocks-table">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="product-thumbnail">تصویر</th>
                <th class="product-name">محصول</th>
                <th class="product-price">قیمت</th>
                <th class="product-quantity">تعداد</th>
                <th class="product-remove">حذف</th>
              </tr>
            </thead>
            <tbody>




         @foreach($carts as $cart)
              <tr>
                <td class="product-thumbnail">
                  <img src="storage/{{$cart['attributes']['picture']}}" alt="Image" class="img-fluid">
                </td>
                <td class="product-name">
                  <h2 class="h5 text-black">{{$cart->name}}</h2>
                </td>
                <td>{{$cart->price * $cart->quantity}}تومان</td>
                <td>
                  <div class="input-group mb-3" style="max-width: 70px;">
                    {{$cart->quantity}}
                  </div>
                </td>
                <td><a href="{{route('delete_cart', $cart->id)}}" class="btn btn-primary height-auto btn-sm">X</a></td>
              </tr>
        @endforeach





            </tbody>
          </table>
        </div>
      </form>
    </div>

    <div class="row">
      <div class="col-md-2">
        <div class="row">
        </div>
      </div>
      <div class="col-md-6 pl-5">
        <div class="row justify-content-end">
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-12 text-right border-bottom mb-5">
                <h3 class="text-black h4 text-uppercase">قیمت کل</h3>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-6">
                <span class="text-black">قیمت نهایی</span>
              </div>
              <div class="col-md-6 text-right">
                <strong class="text-black">{{$c}}تومان</strong>
              </div>
            </div>


            @if($carts->count() != 0)
            <div class="row">
              <div class="col-md-12">
              <a href="{{route('address')}}">  <button class="btn btn-primary btn-lg btn-block" >ادامه ی خرید</button></a>
              </div>
            </div>
            @endif

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
