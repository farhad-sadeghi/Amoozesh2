

@extends('main.shop.layout')
@section('content')


<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <span class="icon-check_circle display-3 text-success"></span>
        <h2 class="display-3 text-black">با تشکر از شما</h2>
       @if(Request::input('Status') == 'OK')
        <p><a href="{{route('buyback',Request::input('Authority'))}}" class="btn btn-sm height-auto px-4 py-3 btn-primary" id="bb">برگشت به سایت</a></p>
        @else
        <p><a href="{{route('sale')}}" class="btn btn-sm height-auto px-4 py-3 btn-primary" id="bb">برگشت به سایت</a></p>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
