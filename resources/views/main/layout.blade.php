<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>آموزشگاه</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('css/bootstrap-3.1.1.min.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Custom Theme files -->
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="{{asset('css/jquery.countdown.css')}}" />

<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');
        }
    );
});
</script>
<link rel="stylesheet" href="{{asset('css/clndr.css')}}" type="text/css" />
<script src="{{asset('js/underscore-min.js')}}" type="text/javascript"></script>
<script src= "{{asset('js/moment-2.2.1.js')}}" type="text/javascript"></script>
<script src="{{asset('js/clndr.js')}}" type="text/javascript"></script>
<script src="{{asset('js/site.js')}}" type="text/javascript"></script>
</head>
<body>

<!-- banner -->
@include('partial.navigate')
	<!-- //banner -->

  <div class="courses_banner">
    <div class="container">
      <h3>رایان رهجو</h3>
    <p></p>
        <div class="breadcrumb1">
            <!-- <ul>
                  <li class="icon6"><a href="index.html">صفحه اصلی</a></li>
                <li class="current-page">درباره ما</li>
            </ul> -->
        </div>
    </div>
  </div>

@yield('content')

  @include('partial.footer')

<script src="{{asset('js/jquery.countdown.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
