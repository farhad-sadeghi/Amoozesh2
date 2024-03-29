@extends('main.layout')
@section('content')



<div class="site-section">
  <div class="container">



 <form action="{{route('buy',[$c])}}" method="post" onsubmit="myButton.disabled = true; return true;">
 @csrf
    <div class="row" style="text-align:right;float:center !important">
      <div class="col-md-6 mb-5 mb-md-0">
        <h2 class="h3 mb-3 text-black"> مشخصات</h2>
        <div class="p-3 p-lg-5 border">
          <div class="form-group row">
            <div class="col-md-12">
              <label for="c_fname" class="text-black"> نام <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="name" placeholder="نام" value="{{Auth::user()->name}}" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-6">
              <label for="c_companyname" class="text-black"> استان <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_companyname" name="state" placeholder="استان" value="{{Auth::user()->state}}" required>
            </div>
            <div class="col-md-6">
              <label for="c_companyname" class="text-black">شهر <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_companyname" name="city" placeholder="شهر" value="{{Auth::user()->city}}" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <label for="c_address" class="text-black">ادرس <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_address" name="addres" placeholder=" ادرس" value="{{Auth::user()->addres}}" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-6">
              <label for="c_phone" class="text-black">تلفن همراه <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_phone" name="phone" placeholder="تلفن همراه" value="{{Auth::user()->phone}}" required>
            </div>
            <div class="col-md-6">
              <label for="c_postal_zip" class="text-black"> کدپستی <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="c_postal_zip" name="post_code" placeholder="کدپستی" value="{{Auth::user()->post_code}}" required>
            </div>
          </div>

          <div class="form-group row mb-5">
            <div class="col-md-12">
              <label for="c_email_address" class="text-black"> ادرس ایمیل</label>
              <input type="text" class="form-control" id="c_email_address" name="email" placeholder="ادرس ایمیل" value="{{Auth::user()->email}}">
            </div>
          </div>

          <div class="form-group">
            <label for="c_order_notes" class="text-black"> توضیحات</label>
            <textarea name="text" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="توضیحات خود را در اینجا بنویسید"></textarea>
          </div>

        </div>
      </div>
      <div class="col-md-6">
        <div class="row mb-5">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black"> سفارش شما</h2>
            <div class="p-3 p-lg-5 border">
              <table class="table site-block-order-table mb-5">
                <thead>
                  <th>محصول</th>
                  <th>قیمت</th>
                </thead>
                <tbody>


                @foreach($carts as $cart)
                  <tr>
                    <td>{{$cart->name}} <strong class="mx-2">x</strong>{{ $cart->quantity}}</td>
                    <td>{{$cart->price * $cart->quantity}}تومان</td>
                  </tr>
                @endforeach
                  <tr>
                    <td class="text-black font-weight-bold"><strong>قیمت نهایی </strong></td>
                    <td class="text-black font-weight-bold"><strong>{{$c}}تومان</strong></td>
                  </tr>

                </tbody>




              </table>

              <div class="form-group">
               <button name="myButton" type="submit" class="btn btn-primary btn-lg btn-block"> صفحه پرداخت</button>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
    </form>



  </div>
</div>

@endsection
