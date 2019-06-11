@extends('main.layout')
@section('content')



  <!-- //banner -->
<div class="features">
   <div class="container">
      <h1>چگونه ما را پیدا می کنید؟</h1>
      <div class="map">
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
    </div>


    @foreach($contacts->all() as $contactss)
    <p>{{$contactss->text}}</p>
    <div class="wrapper">
      <div class="col_1">
        <i class="fa fa-home  icon2"></i>
        <div class="box">
          <p class="marTop9">{{$contactss->name}}</p>
        </div>
      </div>

      <div class="col_2">
        <i class="fa fa-phone  icon2"></i>
        <div class="box">
          <p class="marTop9"> {{$contactss->phone}}</p>
        </div>
      </div>

      <div class="col_2">
        <i class="fa fa-envelope icon2"></i>
        <div class="box">
          <p class="m_6"><a href="" class="link4">{{$contactss->email}}</a></p>
        </div>
      </div>
      <div class="clearfix"> </div>
   </div>
   @endforeach







   <form class="contact_form" action="{{route('contact2')}}" method="post">
     @csrf
    <h2>فرم تماس با ما</h2>
    <div class="col-md-6 grid_6">
      <input name="name" type="text" class="text" ="نام" placeholder="نام" required autofocus>
      <input name="email" type="text" class="text" ="ایمیل" placeholder="ایمیل" required autofocus>
      <input name="phone" type="text" class="text" ="تلفن" placeholder="تلفن"required autofocus>
    </div>

    <div class="col-md-6 grid_6">
      <textarea name="text" value="Message" placeholder="پیام" required autofocus></textarea>
    </div>
          <div class="clearfix"> </div>
          <div class="btn_3">
      <input class="more_btn" type="submit" value="ارسال پیام">
      </div>
   </form>


  </div>
</div>


@endsection
