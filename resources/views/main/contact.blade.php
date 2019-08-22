@extends('main.layout')
@section('content')

<div class="site-blocks-cover inner-page" style="background-image: url('images2/clement-h-95YRwf6CNw8-unsplash.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center" data-aos="fade">
  <div class="container">
    <div class="row">
    </div>
  </div>
</div>

<div class="bg-light py-3" style="text-align:right">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="{{route('sale')}}">خانه</a> <strong class="text-black"></strong></div>
    </div>
  </div>
</div>

<div class="site-section" style="text-align:right">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="h3 mb-3 text-black">تماس با ما</h2>
      </div>
      <div class="col-md-7">

        <form action="{{route('contact2')}}" method="post">
        @csrf
          <div class="p-3 p-lg-5 border">
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_fname" class="text-black">نام  <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_fname" name="name" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_email" class="text-black">ایمیل <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="c_email" name="email" placeholder="" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_subject" class="text-black">تلفن </label><span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_subject" name="phone" required>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_message" class="text-black">پیام </label><span class="text-danger">*</span></label>
                <textarea name="text" id="c_message" cols="30" rows="7" class="form-control" required></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-12">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="ارسال">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-5 ml-auto">
        <div class="p-4 border mb-3">
          <span class="d-block text-primary h6 text-uppercase"> ادرس شرکت:</span>
          <p class="mb-0"> بروجرد خیابان بهار نرسیده به میدان بهار</p>
        </div>
        <div class="p-4 border mb-3">
          <span class="d-block text-primary h6 text-uppercase">ادرس اموزشگاه:</span>
          <p class="mb-0">بروجرد خیابان بهار روبه روی اتش نشانی</p>
        </div>
        <div class="p-4 border mb-3">
          <span class="d-block text-primary h6 text-uppercase">تلفن اموزشگاه:</span>
          <p class="mb-0">2620221</p>
        </div>

      </div>
    </div>
  </div>
</div>



@endsection
