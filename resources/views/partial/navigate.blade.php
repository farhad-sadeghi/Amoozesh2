@inject('sale', 'App\Sale')
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		       <span class="sr-only">تنظیمات ناوبری</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	           <a class="navbar-brand" href="{{route('index')}}">رایان رهجو</a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
		        <li class="dropdown">
		                  <a href="login.html"><i class="fa fa-user"></i><span>ورود</span></a>
		        </li>
		         <li class="dropdown">
		         	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i><span>سبد خرید</span></a>
		        </li>
		         <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-calendar"></i><span>رویداد ها</span></a>
		             <ul class="dropdown-menu">
			            <li><a href="events.html">رویداد1</a></li>
			            <li><a href="events.html">رویداد2</a></li>
			            <li><a href="events.html">رویداد3</a></li>
		             </ul>
		        </li>
		        <li class="dropdown">
		               <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span>انگلیسی</span></a>
		            <ul class="dropdown-menu">
			          <li><a href="#"><span><i class="flags us"></i><span>انگلیسی</span></span></a></li>
			            <li><a href="#"><span><i class="flags newzland"></i><span>نیوزلند</span></span></a></li>
			        </ul>
		        </li>
		        <li class="dropdown">
		             <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i><span>جستجو</span></a>
		            <ul class="dropdown-menu search-form">
			           <form>
                            <input type="text" class="search-text" name="s" placeholder="Search...">
                            <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                       </form>
			        </ul>
		        </li>
		    </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
</nav>
<nav class="navbar nav_bottom" role="navigation">
 <div class="container">
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
            <span class="sr-only">تنظیمات ناوبری</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
   </div>
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a href="{{route('index')}}">صفحه اصلی</a></li>
            <li><a href="about.html">درباره ما</a></li>
    		<li class="dropdown mega-dropdown active">
			      <a href="#" class="dropdown-toggle" data-toggle="dropdown">پذیرش<span class="caret"></span></a>
				<div class="dropdown-menu mega-dropdown-menu">
                    <div class="container-fluid">
    				    <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="men">
                            <ul class="nav-list list-inline">
                                <li><a href="admission.html"><img src="images/t7.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t8.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t9.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t1.jpg" class="img-responsive" alt=""/></a></li>
                            </ul>
                          </div>
                          <div class="tab-pane" id="women">
                            <ul class="nav-list list-inline">
                                <li><a href="admission.html"><img src="images/t1.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t2.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t3.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t4.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t5.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.html"><img src="images/t6.jpg" class="img-responsive" alt=""/></a></li>
                            </ul>
                         </div>
                       </div>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="active"><a href="#men" role="tab" data-toggle="tab">مدرسه</a></li>
                       <li><a href="#women" role="tab" data-toggle="tab">دانشگاه</a></li>
                   </ul>
				</div>
			</li>
	<li><a href="faculty.html">دانشکده</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">برنامه ها<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">


							 @foreach($sale->all() as $salee)

                <li><a href="{{route('sale',$salee->id)}}"> {{$salee->name}} </a></li>

              @endforeach
              </ul>
            </li>
             <li><a href="{{route('service')}}">خدمات</a></li>
            <li><a href="features.html">ویزگی ها</a></li>
            <li><a href="blog.html">وبلاگ</a></li>
            <li><a href="career.html">حرفه</a></li>
            <li class="last"><a href="{{route('contact')}}">تماس با ما</a></li>
        </ul>
     </div><!-- /.navbar-collapse -->
   </div>
</nav>
