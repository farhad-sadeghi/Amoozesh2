@extends('main.layout')
@section('content')


<div class="site-section">
  <div class="container">

 <form action="{{ route('password.update') }}" method="post" onsubmit="myButton.disabled = true; return true;" >
 @csrf

   <input type="hidden" name="token" value="{{ $token }}">
    <div class="row" style="text-align:right;float:center !important">
      <div class="col-md-6 mb-5 mb-md-0">
        <h2 class="h3 mb-3 text-black">تغییر کلمه عبور </h2>
        <div class="p-3 p-lg-5 border">

          <div class="form-group row ">
            <div class="col-md-12">
              <label for="c_email_address" class="text-black"> ایمیل:</label>
              <input type="email" class="form-control" name="email"  value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <label for="c_fname" class="text-black"> کلمه عبور:</label>
              <input type="password" class="form-control" name="password" required autocomplete="new-password">
            </div>
          </div>

          <div class="form-group row  mb-5">
            <div class="col-md-12">
              <label for="c_fname" class="text-black">تایید کلمه عبور:</label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <input type="submit" class="btn btn-primary btn-lg btn-block" id="c_email_address" value="تغییر کلمه عبور">
            </div>
          </div>

        </div>
      </div>
    </div>
    </form>



  </div>
</div>

@endsection
