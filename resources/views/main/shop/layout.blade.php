@inject('sale', 'App\Sale')
@inject('contacts', 'App\Contact')
<html lang="en">
  <head>
    <title>ShopMax &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{asset('fonts2/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css2/bootstrap.min.css')}}">


    <link rel="stylesheet" href="{{asset('css2/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css2/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css2/owl.theme.default.min.css')}}">


    <link rel="stylesheet" href="{{asset('css2/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css2/style.css')}}">
  <link href="{{asset('css2/bootstrap-rtl.min_.css')}}" rel="stylesheet">
  </head>
  <body>
    <div class="site-wrap">
      <div class="site-navbar bg-white py-2">

        <div class="search-wrap">
          <div class="container">
            <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
            <form action="{{route('search')}}" method="get">
              @csrf
              <input type="text" name="search" class="form-control" placeholder="Search keyword and hit enter...">
            </form>
          </div>
        </div>

        <div class="container">
          <div class="d-flex align-items-center justify-content-between">
            <div class="logo">
              <div class="site-logo">
                <a href="{{route('sale')}}" class="js-logo-clone"> rayan rahjoo</a>
              </div>
            </div>
            <div class="main-nav d-none d-lg-block">
              <nav class="site-navigation text-right text-md-center" role="navigation">
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <!-- <li class="has-children active">
                    <a href="index.html">Home</a>
                    <ul class="dropdown">
                      <li><a href="#">Menu One</a></li>
                      <li><a href="#">Menu Two</a></li>
                      <li><a href="#">Menu Three</a></li>
                      <li class="has-children">
                        <a href="#">Sub Menu</a>
                        <ul class="dropdown">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li> -->
                  @foreach($sale->all() as $salee)
                  <li><a href="{{route('sale2',$salee->id)}}">{{$salee->name}}</a></li>
                  @endforeach

                </ul>
              </nav>
            </div>
            <div class="icons">
              <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
              <a href="{{route('cart')}}" class="icons-btn d-inline-block bag">
                <span class="icon-shopping-bag"></span>
                <span class="number">{{$carts->count()}}</span>
              </a>
              <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
            </div>
          </div>
        </div>
      </div>

   @yield('content')
   <footer class="site-footer custom-border-top" style="text-align:right;float:center !important">
     <div class="container">
       <div class="row">
         <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
           <h3 class="footer-heading mb-4">رایان رهجو</h3>
           <a href="#" class="block-6">
             <img src="{{asset('images2/about_1.jpg')}}" alt="Image placeholder" class="img-fluid rounded mb-4">
             <h3 class="font-weight-light  mb-0">بهترین محصولات را از رایان رهجو خریداری کنید</h3>
             <p>06642530342</p>
           </a>
         </div>
         <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
           <div class="row">
             <div class="col-md-12">
               <h3 class="footer-heading mb-4">لینک های سریع </h3>
             </div>
             <div class="col-md-6 col-lg-4">
               <ul class="list-unstyled">
                 <li><a href="{{route('about')}}">درباره ی ما </a></li>
               </ul>
             </div>
             <div class="col-md-6 col-lg-4">
               <ul class="list-unstyled">
                 <li><a href="{{route('contact')}}">تماس با ما</a></li>
               </ul>
             </div>
             <div class="col-md-6 col-lg-4">
               <ul class="list-unstyled">
                 <li><a href="#">خدمات </a></li>
               </ul>
             </div>
           </div>
         </div>

         <div class="col-md-6 col-lg-3">
           <div class="block-5 mb-5">
             <h3 class="footer-heading mb-4"> اطلاعات تماس</h3>

             @foreach($contacts->all() as $contactss)
                 <ul class="list-unstyled">
                   <li class="address">{{$contactss->name}}</li>
                   <li class="phone"><a href="tel://23923929210">{{$contactss->phone}}</a></li>
                   <li class="email">{{$contactss->email}}</li>
                 </ul>

                 @endforeach


           </div>

           <div class="block-7">
             <form action="{{route('email_insert')}}" method="post">
               @csrf
               <label for="email_subscribe" class="footer-heading">Subscribe</label>
               <div class="form-group">
                 <input type="name" name="name" class="form-control py-4" id="email_subscribe" placeholder="Email">
                 <input type="submit" class="btn btn-sm btn-primary" value="Send">
               </div>
             </form>
           </div>
         </div>
       </div>
       <div class="row pt-5 mt-5 text-center">
         <div class="col-md-12">
           <p>
           <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
   استفاده از مطالب فروشگاه اینترنتی رایان رهجو فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به شرکت رایان رهجو میباشد           <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
           </p>
         </div>

       </div>
     </div>
   </footer>
</div>
    <script src="{{asset('js2/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js2/jquery-ui.js')}}"></script>
    <script src="{{asset('js2/jquery-ui.js')}}"></script>
    <script src="{{asset('js2/bootstrap.min.js')}}"></script>
    <script src="{{asset('js2/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js2/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js2/aos.js')}}"></script>
    <script src="{{asset('js2/main.js')}}"></script>
    <script src="{{asset('js2/sweetalert.js') }}"></script>


    @if( session('search') || session('email'))
    @include('partial.javascript')
    @endif

    @if( session('add_cart'))
    @include('partial.javascript2')
    @endif

    </body>
  </html>
