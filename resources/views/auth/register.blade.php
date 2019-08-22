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

 <form action="{{route('register')}}" method="post" onsubmit="myButton.disabled = true; return true;" >
 @csrf
    <div class="row" style="text-align:right;float:center !important">
      <div class="col-md-6 mb-5 mb-md-0">
        <h2 class="h3 mb-3 text-black">ثبت نام </h2>
        <div class="p-3 p-lg-5 border">
          <div class="form-group row">
            <div class="col-md-12">
              <label for="c_fname" class="text-black"> نام:</label>
              <input type="text" class="form-control" name="name" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <label for="c_email_address" class="text-black"> پست الکترونیک:</label>
              <input type="email" class="form-control" name="email" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <label class="text-black"> کلمه عبور:</label>
              <input type="password" class="form-control" name="password" required>
            </div>
          </div>

          <div class="form-group row mb-5">
            <div class="col-md-12">
              <label for="c_email_address" class="text-black">  تکرار کلمه عبور:</label>
              <input type="password" class="form-control" name="password_confirmation" required>
            </div>
          </div>

          <div class="form-group row mb-5">
            <div class="col-md-12">
              <input type="submit" class="btn btn-primary btn-lg btn-block" id="c_email_address" value="ثبت نام">
            </div>
          </div>

        </div>
      </div>
    </div>
    </form>



  </div>
</div>

@endsection
