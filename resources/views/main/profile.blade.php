@extends('main.layout')
@section('content')



<div class="site-section" style="text-align:right;float:center !important">
  <div class="container">



 <form action="{{route('profile2',[Auth::user()->id])}}" method="post" onsubmit="myButton.disabled = true; return true;">
 @csrf @method('patch')
    <div class="row" >
      <div class="col-md-6 mb-5 mb-md-0">
        <h2 class="h3 mb-3 text-black">مشخصات </h2>
        <div class="p-3 p-lg-5 border">
          <div class="form-group row">
            <div class="col-md-12">
              <label for="c_fname" class="text-black"> نام <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="name" placeholder="نام" value="{{Auth::user()->name}}" >
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-6">
              <label for="c_companyname" class="text-black"> استان <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="state" placeholder="استان" value="{{Auth::user()->state}}" >
            </div>
            <div class="col-md-6">
              <label for="c_companyname" class="text-black">شهر <span class="text-danger">*</span></label>
              <input type="text" class="form-control"  name="city" placeholder="شهر" value="{{Auth::user()->city}}" >
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <label for="c_address" class="text-black">ادرس <span class="text-danger">*</span></label>
              <input type="text" class="form-control"  name="addres" placeholder=" ادرس" value="{{Auth::user()->addres}}" >
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-6">
              <label for="c_phone" class="text-black">تلفن همراه <span class="text-danger">*</span></label>
              <input type="text" class="form-control"  name="phone" placeholder="تلفن همراه" value="{{Auth::user()->phone}}" >
            </div>
            <div class="col-md-6">
              <label for="c_postal_zip" class="text-black"> کدپستی <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="post_code" placeholder="کدپستی" value="{{Auth::user()->post_code}}" >
            </div>
          </div>

          <div class="form-group row mb-5">
            <div class="col-md-12">
              <label for="c_email_address" class="text-black"> پست الکترونیک:</label>
              <input type="text" class="form-control"  name="email" placeholder="پست الکترونیک:" value="{{Auth::user()->email}}" >
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <input type="submit" class="btn btn-primary btn-lg btn-block" value="تغییر">
            </div>
          </div>

        </div>
      </div>

    </div>
    </form>



  </div>
</div>

@endsection
