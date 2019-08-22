@extends('main.layout')
@section('content')



<div class="site-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12">
        <div class="border p-4 rounded" role="alert" style="text-align:center;float:center !important">
          <a href="{{route('password.request')}}">فراموش کردن رمز عبور</a>
         </div>
      </div>
    </div>


 <form action="{{route('login')}}" method="post" onsubmit="myButton.disabled = true; return true;" >
 @csrf
    <div class="row" style="text-align:right;float:center !important">
      <div class="col-md-6 mb-5 mb-md-0">
        <h2 class="h3 mb-3 text-black">ورود </h2>
        <div class="p-3 p-lg-5 border">

          <div class="form-group row ">
            <div class="col-md-12">
              <label for="c_email_address" class="text-black"> ایمیل:</label>
              <input type="email" class="form-control" name="email" required>
            </div>
          </div>

          <div class="form-group row  mb-5">
            <div class="col-md-12">
              <label for="c_fname" class="text-black"> کلمه عبور:</label>
              <input type="password" class="form-control" name="password" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <input type="submit" class="btn btn-primary btn-lg btn-block" id="c_email_address" value="ورود">
            </div>
          </div>

        </div>
      </div>
    </div>
    </form>



  </div>
</div>

@endsection
