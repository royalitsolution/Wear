
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  @if(isset($page->meta_tag) && isset($page->meta_description))
  <meta name="keywords" content="{{ $page->meta_tag }}">
  <meta name="description" content="{{ $page->meta_description }}">
  <title>{{$gs->title}}</title>
  @elseif(isset($blog->meta_tag) && isset($blog->meta_description))
  <meta name="keywords" content="{{ $blog->meta_tag }}">
  <meta name="description" content="{{ $blog->meta_description }}">
  <title>{{$gs->title}}</title>
  @elseif(isset($productt))
  <meta name="keywords" content="{{ !empty($productt->meta_tag) ? implode(',', $productt->meta_tag ): '' }}">
  <meta name="description" content="{{ $productt->meta_description != null ? $productt->meta_description : strip_tags($productt->description) }}">
  <meta property="og:title" content="{{$productt->name}}" />
  <meta property="og:description" content="{{ $productt->meta_description != null ? $productt->meta_description : strip_tags($productt->description) }}" />
  <meta property="og:image" content="{{asset('assets/images/thumbnails/'.$productt->thumbnail)}}" />
  <meta name="author" content="">
  <title>{{substr($productt->name, 0,11)."-"}}{{$gs->title}}</title>
  @else
  <meta name="keywords" content="{{ $seo->meta_keys }}">
  <meta name="author" content="">
  <title>{{$gs->title}}</title>
  @endif
  <!-- favicon -->
  <link rel="icon"  type="image/x-icon" href="{{asset('assets/images/'.$gs->favicon)}}"/>


  @if($langg->rtl == "1")

  <!-- stylesheet -->
  <link rel="stylesheet" href="{{asset('assets/front/css/rtl/all.css')}}">

  <!--Updated CSS-->
  <link rel="stylesheet" href="{{ asset('assets/front/css/rtl/styles.php?color='.str_replace('#','',$gs->colors).'&amp;'.'header_color='.str_replace('#','',$gs->header_color).'&amp;'.'footer_color='.str_replace('#','',$gs->footer_color).'&amp;'.'copyright_color='.str_replace('#','',$gs->copyright_color).'&amp;'.'menu_color='.str_replace('#','',$gs->menu_color).'&amp;'.'menu_hover_color='.str_replace('#','',$gs->menu_hover_color)) }}">

  @else

  <!-- stylesheet -->
  <link rel="stylesheet" href="{{asset('assets/front/css/all.css')}}">

  <!--Updated CSS-->
  <link rel="stylesheet" href="{{ asset('assets/front/css/styles.php?color='.str_replace('#','',$gs->colors).'&amp;'.'header_color='.str_replace('#','',$gs->header_color).'&amp;'.'footer_color='.str_replace('#','',$gs->footer_color).'&amp;'.'copyright_color='.str_replace('#','',$gs->copyright_color).'&amp;'.'menu_color='.str_replace('#','',$gs->menu_color).'&amp;'.'menu_hover_color='.str_replace('#','',$gs->menu_hover_color)) }}">

  @endif
  @yield('styles')

  <!-- new -->
  <link rel="stylesheet" href="{{asset('assets/newassets/assets/source/css/vendor/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('assets/newassets/assets/source/css/vendor/fontawesome.css')}}">
  <link rel="stylesheet" href="{{asset('assets/newassets/assets/source/css/vendor/slick.css')}}">
  <link rel="stylesheet" href="{{asset('assets/newassets/assets/source/css/vendor/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/newassets/assets/source/css/custom/main.css')}}">
  <link rel="stylesheet" href="{{asset('assets/newassets/assets/source/css/custom/home-1.css')}}">
  <link rel="stylesheet" href="{{asset('assets/newassets/assets/source/css/vendor/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('assets/newassets/css1/custom/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/newassets/assets/source/css/custom/contact.css')}}">

</head>
<style type="text/css">
   <style>
      .dropdown-menu {
         position: relative;
         border: none;
         background: transparent;

      }

      .right-widget li {
         display: flex !important;
         flex-direction: row;
      }

      .dropdown-menu {
         position: relative;
         border: none;
         background: transparent;

      }

      .navbar-item {
         border-bottom: 0px !important;
      }


      
   </style>
</style>
<body>

  @if($gs->is_loader == 1)
  <div class="preloader" id="preloader" style="background: url({{asset('assets/images/'.$gs->loader)}}) no-repeat scroll center center #FFF;"></div>
  @endif

  @if($gs->is_popup== 1)

  @if(isset($visited))
  <div style="display:none">
    <img src="{{asset('assets/images/'.$gs->popup_background)}}">
  </div>

  <!--  Starting of subscribe-pre-loader Area   -->
  <div class="subscribe-preloader-wrap" id="subscriptionForm" style="display: none;">
    <div class="subscribePreloader__thumb" style="background-image: url({{asset('assets/images/'.$gs->popup_background)}});">
      <span class="preload-close"><i class="fas fa-times"></i></span>
      <div class="subscribePreloader__text text-center">
        <h1>{{$gs->popup_title}}</h1>
        <p>{{$gs->popup_text}}</p>
        <form action="{{route('front.subscribe')}}" id="subscribeform" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <input type="email" name="email"  placeholder="{{ $langg->lang741 }}" required="">
            <button id="sub-btn" type="submit">{{ $langg->lang742 }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--  Ending of subscribe-pre-loader Area   -->

  @endif

  @endif



  <!-- Logo Header Area End -->

  <!--Main-Menu Area Start-->

  <!--Main-Menu Area End-->
  <nav class="navbar-part">
    <div class="container-fluid">
     <div class="row">
      <div class="col-lg-12">
       <div class="navbar-element px-2">
        <ul class="left-widget">
         <li><a class="icon icon-inline menu-bar" href="#">
          <i class="fas fa-align-left"></i></a>
        </li>
      </ul>
      <a class="navbar-logo" href="{{ route('front.index') }}"> <img src="{{asset('assets/images/'.$gs->logo)}}" alt="logo"> </a>
      <div class="navbar-slide">
       <div class="navbar-content">
        <div class="navbar-slide-cross"> <a class="icon icon-inline cross-btn" href="#"><i
         class="fas fa-times"></i></a></div>
         <div class="navbar-slide-logo"> <a href="{{url('/')}}"><img src="{{asset('assets/images/'.$gs->logo)}}" alt="logo"></a>
         </div>
         <form class="search-form mb-6 navbar-slide-src"><input type="text"
          placeholder="Search anything..."> </form>
          <ul class="navbar-list">
            @php
            $i=1;
            @endphp
            @foreach($categories as $category)
            <li class="navbar-item navbar-dropdown navbar-megamenu">
             <a class="navbar-link dropdown-indicator" href="#"> <span>{{ $category->name }}</span> <i
               class="fas fa-chevron-down"></i> </a>
               <div class="megamenu">
                <ul>
                	@if(count($category->subs) > 0)					
                 @foreach($category->subs as $subcat)

                 <li><a href="{{ route('front.category',$category->slug.'/'.$subcat->slug) }}">
                   <span>{{$subcat->name}}</span>
                 </a></li>
                 @endforeach
                 @endif
                 <!-- <li><a href="products.html"> -->
                   <!-- <span>Lower</span> -->
                   <!-- </a></li> -->
                   <!-- <li><a href="products.html"> -->
                     <!-- <span>Jacket</span> -->
                     <!-- </a></li> -->

                   </ul>
                 </div>
               </li>
               @endforeach

               <li class="navbar-item"><a class="navbar-link" href="{{ route('front.contact') }}">
                {{ $langg->lang23 }}
              </a></li>
            </ul>
          </div>
        </div>


        <form class="search-form navbar-src" id="searchForm" action="{{ route('front.category', [Request::route('category'),Request::route('subcategory'),Request::route('childcategory')]) }}" method="GET">
          @if (!empty(request()->input('sort')))
          <input type="hidden" name="sort" value="{{ request()->input('sort') }}">
          @endif
          @if (!empty(request()->input('minprice')))
          <input type="hidden" name="minprice" value="{{ request()->input('minprice') }}">
          @endif
          @if (!empty(request()->input('maxprice')))
          <input type="hidden" name="maxprice" value="{{ request()->input('maxprice') }}">
          @endif  
          <i class="fas fa-search ml-5"
          style="position: relative; left: 30px;"></i> <input type="text"
          placeholder="Search anything..." name="prod_name" value="{{ request()->input('search') }}" autocomplete="off"> <button class="btn btn-inline d-none" type="submit"> <i
           class="fas fa-search"></i> <span>search</span> </button></form>
           <ul class="right-widget dropdown-menu navbar-list" style="margin-bottom: 0px;">
             <li class="" style="border-bottom: 0px;">
              <div class="navbar-item navbar-dropdown navbar-megamenu">
              <a class=" icon icon-inline" href="#"> <i class="fas fa-user"></i> <br> <span>Profile</span></a>
              <div class="megamenu" style="position: absolute;background-color: #fff; z-index: 99;">
               <ul>
                <div>
                 <span><b>Welcome
                 </b></span>
                  <br>
                 @if(Auth::guard('web')->check())
                 <span>{{auth()->user()->name}}
                 </span>
                 @endif
                 @if(!Auth::guard('web')->check())
                 <span class="login"> <a href="{{ route('user.login') }}">{{ $langg->lang12 }} / {{ $langg->lang13 }}</a></span>
                 @endif
                 <hr>
               </div>
               <li>
                 @if(Auth::guard('web')->check())
                 <a href="{{route('user-dashboard')}}">
                  <span>Dashboard
                  </span></a>
                  @endif
                  @if(!Auth::guard('web')->check())
                  <a href="{{route('user.login')}}">
                    <span> Dashboard
                    </span>
                    @endif
                  </a>
                </li>
               <li>
                 @if(Auth::guard('web')->check())
                 <a href="{{route('user-orders')}}">
                  <span>Orders
                  </span></a>
                  @endif
                  @if(!Auth::guard('web')->check())
                  <a href="{{route('user.login')}}">
                    <span> Orders
                    </span>
                    @endif
                  </a>
                </li>
                <li>
                   @if(Auth::guard('web')->check())
                <a href="{{ route('user-wishlists') }}"><span> Wishlist
                </span></a>
                  @endif 
                   @if(!Auth::guard('web')->check())
                    <a href="{{ route('user.login') }}"><span> Wishlist
                </span></a>
                    @endif
                </li>
                <li style="display: none;"><a href="#"><span> Gift Cards
                </span></a></li>
                <li>
                 @if(Auth::guard('web')->check())
                 <a href="{{ route('user-logout') }}"><span>Logout</span></a>
                  @endif 
                </li>
              </ul>
            </div>
          </div>
          </li>

          <li>
           @if(Auth::guard('web')->check())
           <a class="icon icon-inline" href="{{ route('user-wishlists') }}"><i
            class="fas fa-heart"></i> <br> <span>Wishlist</span> <sup>{{ count(Auth::user()->wishlists) }}</sup></a>

            @else
            <a class="icon icon-inline" href="{{ route('user.login') }}"><i
              class="fas fa-heart"></i> <br> <span>Wishlist</span> <sup>0</sup></a>
              @endif 
            </li>
            <li><a class="icon icon-inline" href="{{ route('front.cart') }}"><i class="fa fa-shopping-bag"></i> <br>  <span>Cart</span><sup>{{ Session::has('cart') ? count(Session::get('cart')->items) : '0' }}</sup></a></li>



          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>

@yield('content')

<!-- Footer Area Start -->
<section class="feature-part my-3">
  <div class="container">
   <div class="row">
    <div class="col-md-4 col-lg-4">
     <div class="feature-card">
      <i class="flaticon-delivery-truck"></i>
      <h3>Free Delivery</h3>
      <p>Tempora odio reiciendis incidunt tenetur deserunt dolores autem beatae</p>
    </div>
  </div>
  <div class="col-md-4 col-lg-4">
   <div class="feature-card">
    <i class="flaticon-save-money"></i>
    <h3>Instant Return</h3>
    <p>Tempora odio reiciendis incidunt tenetur deserunt dolores autem beatae</p>
  </div>
</div>
<div class="col-md-4 col-lg-4">
 <div class="feature-card">
  <i class="flaticon-customer-service"></i>
  <h3>Quick Support</h3>
  <p>Tempora odio reiciendis incidunt tenetur deserunt dolores autem beatae</p>
</div>
</div>
</div>
</div>
</section>


<footer class="footer-part">
  <div class="container">
   <div class="row">
    <div class="col-md-6 col-lg-4">
     <div class="footer-content">
      <a href="{{url('/')}}"><img src="{{asset('assets/newassets/assets/images/logo/logo.png')}}" alt="logo"></a>
      <p>Whether it is draping a saree into a dhoti style, wearing the right lingerie under certain dresses or discovering multiple uses out of heavy ethnic wear.</p>
      <ul class="footer-icon">
       @if(App\Models\Socialsetting::find(1)->f_status == 1)
       <li><a class="icon icon-inline" href="{{ App\Models\Socialsetting::find(1)->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
       @endif
       @if(App\Models\Socialsetting::find(1)->t_status == 1)
       <li><a class="icon icon-inline" href="{{ App\Models\Socialsetting::find(1)->twitter }}"><i class="fab fa-twitter"></i></a></li>
       @endif
       @if(App\Models\Socialsetting::find(1)->l_status == 1)

       <li><a class="icon icon-inline" href="{{ App\Models\Socialsetting::find(1)->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
       @endif
       <li style="display: none;"><a class="icon icon-inline" href="#"><i class="fab fa-instagram"></i></a></li>
       @if(App\Models\Socialsetting::find(1)->g_status == 1)
       <li><a class="icon icon-inline" href="{{ App\Models\Socialsetting::find(1)->gplus }}"><i class="fab fa-google-plus-g"></i></a></li>
       @endif

       <li style="display : none;"><a class="icon icon-inline" href="#"><i class="fab fa-pinterest-p"></i></a></li>
     </ul>
   </div>
 </div>
 <div class="col-md-6 col-lg-4">
   <div class="footer-content">
    <h3 class="title">Useful Links</h3>
    <div class="footer-widget">
     <ul>
      <li><a href="{{route('user-profile')}}">My Account</a></li>
      <li><a href="{{route('user-orders')}}">Order History</a></li>
      <li><a href="{{route('user-order-track')}}">Order Tracking</a></li>
      <li><a href="#">Best Seller</a></li>
      <li><a href="#">New Arrivals</a></li>
    </ul>
    <ul>
      <li><a href="{{url('/terms')}}">Terms & Conditions</a></li>
      <li><a href="{{url('/privacy')}}">Privacy Policy</a></li>
      <li><a href="{{ route('front.contact') }}">Contact Us</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="{{route('front.faq')}}">Faq</a></li>
    </ul>
  </div>
</div>
</div>
<div class="col-md-12 col-lg-4">
 <div class="footer-content">
  <h3 class="title">Download the App</h3>
  <br>
  <p>WE will help you acquire some unique and useful fashion hacks. Each hack is designed with the intention to help you get the best wear out of everything in your wardrobe.</p>
</div>
<ul class="download-app">
  <li><a href="#"><img src="{{asset('assets/newassets/assets/images/logo/google.png')}}" alt="google"></a></li> <br>
  <li><a href="#"><img src="{{asset('assets/newassets/assets/images/logo/app.png')}}" alt="app"></a></li> <br>
</ul>
</div>
</div>
</div>
</footer>
<div class="footer-bottom">
  <div class="container">
   <p>Copyright WE &copy; <?php echo date('Y')?> | All rights reserved </p>
   <ul class="pay-card">
    <li><a href="#"><img src="{{asset('assets/newassets/assets/images/pay-card/01.jpg')}}" alt="payment-1"></a></li>
    <li><a href="#"><img src="{{asset('assets/newassets/assets/images/pay-card/02.jpg')}}" alt="payment-2"></a></li>
    <li><a href="#"><img src="{{asset('assets/newassets/assets/images/pay-card/03.jpg')}}" alt="payment-3"></a></li>
    <li><a href="#"><img src="{{asset('assets/newassets/assets/images/pay-card/04.jpg')}}" alt="payment-4"></a></li>
  </ul>
</div>
</div>
<script src="{{asset('assets/newassets/assets/source/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/newassets/assets/source/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/newassets/assets/source/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/newassets/assets/source/js/vendor/slick.min.js')}}"></script>
<script src="{{asset('assets/newassets/assets/source/js/custom/slick.js')}}"></script>
<script src="{{asset('assets/newassets/assets/source/js/custom/main.js')}}"></script>



<script src="{{asset('assets/newassets/assets/source/js/vendor/jquery-ui.js')}}"></script>
</body>
<!-- Footer Area End -->

<!-- Back to Top Start -->
<div class="bottomtotop">
  <i class="fas fa-chevron-right"></i>
</div>
<!-- Back to Top End -->

<!-- LOGIN MODAL -->
<div class="modal fade" id="comment-log-reg" tabindex="-1" role="dialog" aria-labelledby="comment-log-reg-Title"
aria-hidden="true">
<div class="modal-dialog  modal-dialog-centered" role="document">
 <div class="modal-content">
  <div class="modal-header">
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
 <nav class="comment-log-reg-tabmenu">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
   <a class="nav-item nav-link login active" id="nav-log-tab1" data-toggle="tab" href="#nav-log1"
   role="tab" aria-controls="nav-log" aria-selected="true">
   {{ $langg->lang197 }}
 </a>
 <a class="nav-item nav-link" id="nav-reg-tab1" data-toggle="tab" href="#nav-reg1" role="tab"
 aria-controls="nav-reg" aria-selected="false">
 {{ $langg->lang198 }}
</a>
</div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-log1" role="tabpanel"
  aria-labelledby="nav-log-tab1">
  <div class="login-area">
    <div class="header-area">
     <h4 class="title">{{ $langg->lang172 }}</h4>
   </div>
   <div class="login-form signin-form">
     @include('includes.admin.form-login')
     <form class="mloginform" action="{{ route('user.login.submit') }}" method="POST">
      {{ csrf_field() }}
      <div class="form-input">
       <input type="email" name="email" placeholder="{{ $langg->lang173 }}"
       required="">
       <i class="icofont-user-alt-5"></i>
     </div>
     <div class="form-input">
       <input type="password" class="Password" name="password"
       placeholder="{{ $langg->lang174 }}" required="">
       <i class="icofont-ui-password"></i>
     </div>
     <div class="form-forgot-pass">
       <div class="left">
        <input type="checkbox" name="remember" id="mrp"
        {{ old('remember') ? 'checked' : '' }}>
        <label for="mrp">{{ $langg->lang175 }}</label>
      </div>
      <div class="right">
        <a href="javascript:;" id="show-forgot">
         {{ $langg->lang176 }}
       </a>
     </div>
   </div>
   <input type="hidden" name="modal" value="1">
   <input class="mauthdata" type="hidden" value="{{ $langg->lang177 }}">
   <button type="submit" class="submit-btn">{{ $langg->lang178 }}</button>
   @if(App\Models\Socialsetting::find(1)->f_check == 1 ||
   App\Models\Socialsetting::find(1)->g_check == 1)
   <div class="social-area">
     <h3 class="title">{{ $langg->lang179 }}</h3>
     <p class="text">{{ $langg->lang180 }}</p>
     <ul class="social-links">
      @if(App\Models\Socialsetting::find(1)->f_check == 1)
      <li>
       <a href="{{ route('social-provider','facebook') }}">
        <i class="fab fa-facebook-f"></i>
      </a>
    </li>
    @endif
    @if(App\Models\Socialsetting::find(1)->g_check == 1)
    <li>
     <a href="{{ route('social-provider','google') }}">
      <i class="fab fa-google-plus-g"></i>
    </a>
  </li>
  @endif
</ul>
</div>
@endif
</form>
</div>
</div>
</div>
<div class="tab-pane fade" id="nav-reg1" role="tabpanel" aria-labelledby="nav-reg-tab1">
 <div class="login-area signup-area">
  <div class="header-area">
   <h4 class="title">{{ $langg->lang181 }}</h4>
 </div>
 <div class="login-form signup-form">
   @include('includes.admin.form-login')
   <form class="mregisterform" action="{{route('user-register-submit')}}"
   method="POST">
   {{ csrf_field() }}

   <div class="form-input">
     <input type="text" class="User Name" name="name"
     placeholder="{{ $langg->lang182 }}" required="">
     <i class="icofont-user-alt-5"></i>
   </div>

   <div class="form-input">
     <input type="email" class="User Name" name="email"
     placeholder="{{ $langg->lang183 }}" required="">
     <i class="icofont-email"></i>
   </div>

   <div class="form-input">
     <input type="text" class="User Name" name="phone"
     placeholder="{{ $langg->lang184 }}" required="">
     <i class="icofont-phone"></i>
   </div>

   <div class="form-input">
     <input type="text" class="User Name" name="address"
     placeholder="{{ $langg->lang185 }}" required="">
     <i class="icofont-location-pin"></i>
   </div>

   <div class="form-input">
     <input type="password" class="Password" name="password"
     placeholder="{{ $langg->lang186 }}" required="">
     <i class="icofont-ui-password"></i>
   </div>

   <div class="form-input">
     <input type="password" class="Password" name="password_confirmation"
     placeholder="{{ $langg->lang187 }}" required="">
     <i class="icofont-ui-password"></i>
   </div>


   @if($gs->is_capcha == 1)

   <ul class="captcha-area">
     <li>
      <p><img class="codeimg1"
        src="{{asset("assets/images/capcha_code.png")}}" alt=""> <i
        class="fas fa-sync-alt pointer refresh_code "></i></p>
      </li>
    </ul>

    <div class="form-input">
     <input type="text" class="Password" name="codes"
     placeholder="{{ $langg->lang51 }}" required="">
     <i class="icofont-refresh"></i>
   </div>


   @endif

   <input class="mprocessdata" type="hidden" value="{{ $langg->lang188 }}">
   <button type="submit" class="submit-btn">{{ $langg->lang189 }}</button>

 </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- LOGIN MODAL ENDS -->

<!-- FORGOT MODAL -->
<div class="modal fade" id="forgot-modal" tabindex="-1" role="dialog" aria-labelledby="comment-log-reg-Title"
aria-hidden="true">
<div class="modal-dialog  modal-dialog-centered" role="document">
 <div class="modal-content">
  <div class="modal-header">
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">

 <div class="login-area">
  <div class="header-area forgot-passwor-area">
   <h4 class="title">{{ $langg->lang191 }} </h4>
   <p class="text">{{ $langg->lang192 }} </p>
 </div>
 <div class="login-form">
   @include('includes.admin.form-login')
   <form id="mforgotform" action="{{route('user-forgot-submit')}}" method="POST">
    {{ csrf_field() }}
    <div class="form-input">
     <input type="email" name="email" class="User Name"
     placeholder="{{ $langg->lang193 }}" required="">
     <i class="icofont-user-alt-5"></i>
   </div>
   <div class="to-login-page">
     <a href="javascript:;" id="show-login">
      {{ $langg->lang194 }}
    </a>
  </div>
  <input class="fauthdata" type="hidden" value="{{ $langg->lang195 }}">
  <button type="submit" class="submit-btn">{{ $langg->lang196 }}</button>
</form>
</div>
</div>

</div>
</div>
</div>
</div>
<!-- FORGOT MODAL ENDS -->


<!-- VENDOR LOGIN MODAL -->
<div class="modal fade" id="vendor-login" tabindex="-1" role="dialog" aria-labelledby="vendor-login-Title" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" style="transition: .5s;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <nav class="comment-log-reg-tabmenu">
         <div class="nav nav-tabs" id="nav-tab1" role="tablist">
          <a class="nav-item nav-link login active" id="nav-log-tab11" data-toggle="tab" href="#nav-log11" role="tab" aria-controls="nav-log" aria-selected="true">
           {{ $langg->lang234 }}
         </a>
         <a class="nav-item nav-link" id="nav-reg-tab11" data-toggle="tab" href="#nav-reg11" role="tab" aria-controls="nav-reg" aria-selected="false">
           {{ $langg->lang235 }}
         </a>
       </div>
     </nav>
     <div class="tab-content" id="nav-tabContent">
       <div class="tab-pane fade show active" id="nav-log11" role="tabpanel" aria-labelledby="nav-log-tab">
        <div class="login-area">
          <div class="login-form signin-form">
            @include('includes.admin.form-login')
            <form class="mloginform" action="{{ route('user.login.submit') }}" method="POST">
              {{ csrf_field() }}
              <div class="form-input">
                <input type="email" name="email" placeholder="{{ $langg->lang173 }}" required="">
                <i class="icofont-user-alt-5"></i>
              </div>
              <div class="form-input">
                <input type="password" class="Password" name="password" placeholder="{{ $langg->lang174 }}" required="">
                <i class="icofont-ui-password"></i>
              </div>
              <div class="form-forgot-pass">
                <div class="left">
                  <input type="checkbox" name="remember"  id="mrp1" {{ old('remember') ? 'checked' : '' }}>
                  <label for="mrp1">{{ $langg->lang175 }}</label>
                </div>
                <div class="right">
                  <a href="javascript:;" id="show-forgot1">
                    {{ $langg->lang176 }}
                  </a>
                </div>
              </div>
              <input type="hidden" name="modal"  value="1">
              <input type="hidden" name="vendor"  value="1">
              <input class="mauthdata" type="hidden"  value="{{ $langg->lang177 }}">
              <button type="submit" class="submit-btn">{{ $langg->lang178 }}</button>
              @if(App\Models\Socialsetting::find(1)->f_check == 1 || App\Models\Socialsetting::find(1)->g_check == 1)
              <div class="social-area">
               <h3 class="title">{{ $langg->lang179 }}</h3>
               <p class="text">{{ $langg->lang180 }}</p>
               <ul class="social-links">
                 @if(App\Models\Socialsetting::find(1)->f_check == 1)
                 <li>
                   <a href="{{ route('social-provider','facebook') }}">
                     <i class="fab fa-facebook-f"></i>
                   </a>
                 </li>
                 @endif
                 @if(App\Models\Socialsetting::find(1)->g_check == 1)
                 <li>
                   <a href="{{ route('social-provider','google') }}">
                     <i class="fab fa-google-plus-g"></i>
                   </a>
                 </li>
                 @endif
               </ul>
             </div>
             @endif
           </form>
         </div>
       </div>
     </div>
     <div class="tab-pane fade" id="nav-reg11" role="tabpanel" aria-labelledby="nav-reg-tab">
      <div class="login-area signup-area">
        <div class="login-form signup-form">
         @include('includes.admin.form-login')
         <form class="mregisterform" action="{{route('user-register-submit')}}" method="POST">
          {{ csrf_field() }}

          <div class="row">

            <div class="col-lg-6">
              <div class="form-input">
                <input type="text" class="User Name" name="name" placeholder="{{ $langg->lang182 }}" required="">
                <i class="icofont-user-alt-5"></i>
              </div>
            </div>

            <div class="col-lg-6">
             <div class="form-input">
              <input type="email" class="User Name" name="email" placeholder="{{ $langg->lang183 }}" required="">
              <i class="icofont-email"></i>
            </div>

          </div>
          <div class="col-lg-6">
            <div class="form-input">
              <input type="text" class="User Name" name="phone" placeholder="{{ $langg->lang184 }}" required="">
              <i class="icofont-phone"></i>
            </div>

          </div>
          <div class="col-lg-6">

            <div class="form-input">
              <input type="text" class="User Name" name="address" placeholder="{{ $langg->lang185 }}" required="">
              <i class="icofont-location-pin"></i>
            </div>
          </div>

          <div class="col-lg-6">
           <div class="form-input">
            <input type="text" class="User Name" name="shop_name" placeholder="{{ $langg->lang238 }}" required="">
            <i class="icofont-cart-alt"></i>
          </div>

        </div>
        <div class="col-lg-6">

         <div class="form-input">
          <input type="text" class="User Name" name="owner_name" placeholder="{{ $langg->lang239 }}" required="">
          <i class="icofont-cart"></i>
        </div>
      </div>
      <div class="col-lg-6">

        <div class="form-input">
          <input type="text" class="User Name" name="shop_number" placeholder="{{ $langg->lang240 }}" required="">
          <i class="icofont-shopping-cart"></i>
        </div>
      </div>
      <div class="col-lg-6">

       <div class="form-input">
        <input type="text" class="User Name" name="shop_address" placeholder="{{ $langg->lang241 }}" required="">
        <i class="icofont-opencart"></i>
      </div>
    </div>
    <div class="col-lg-6">

      <div class="form-input">
        <input type="text" class="User Name" name="reg_number" placeholder="{{ $langg->lang242 }}" required="">
        <i class="icofont-ui-cart"></i>
      </div>
    </div>
    <div class="col-lg-6">

     <div class="form-input">
      <input type="text" class="User Name" name="shop_message" placeholder="{{ $langg->lang243 }}" required="">
      <i class="icofont-envelope"></i>
    </div>
  </div>

  <div class="col-lg-6">
    <div class="form-input">
      <input type="password" class="Password" name="password" placeholder="{{ $langg->lang186 }}" required="">
      <i class="icofont-ui-password"></i>
    </div>

  </div>
  <div class="col-lg-6">
   <div class="form-input">
    <input type="password" class="Password" name="password_confirmation" placeholder="{{ $langg->lang187 }}" required="">
    <i class="icofont-ui-password"></i>
  </div>
</div>

@if($gs->is_capcha == 1)

<div class="col-lg-6">


  <ul class="captcha-area">
    <li>
      <p>
       <img class="codeimg1" src="{{asset("assets/images/capcha_code.png")}}" alt=""> <i class="fas fa-sync-alt pointer refresh_code "></i>
     </p>

   </li>
 </ul>


</div>

<div class="col-lg-6">

 <div class="form-input">
  <input type="text" class="Password" name="codes" placeholder="{{ $langg->lang51 }}" required="">
  <i class="icofont-refresh"></i>

</div>



</div>

@endif

<input type="hidden" name="vendor"  value="1">
<input class="mprocessdata" type="hidden"  value="{{ $langg->lang188 }}">
<button type="submit" class="submit-btn">{{ $langg->lang189 }}</button>

</div>




</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- VENDOR LOGIN MODAL ENDS -->

<!-- Product Quick View Modal -->

<div class="modal fade" id="quickview" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog quickview-modal modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
     <div class="submit-loader">
      <img src="{{asset('assets/images/'.$gs->loader)}}" alt="">
    </div>
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="container quick-view-modal">

    </div>
  </div>
</div>
</div>
</div>
<!-- Product Quick View Modal -->

<!-- Order Tracking modal Start-->
<div class="modal fade" id="track-order-modal" tabindex="-1" role="dialog" aria-labelledby="order-tracking-modal" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title"> <b>{{ $langg->lang772 }}</b> </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="order-tracking-content">
          <form id="track-form" class="track-form">
            {{ csrf_field() }}
            <input type="text" id="track-code" placeholder="{{ $langg->lang773 }}" required="">
            <button type="submit" class="mybtn1">{{ $langg->lang774 }}</button>
            <a href="#"  data-toggle="modal" data-target="#order-tracking-modal"></a>
          </form>
        </div>

        <div>
          <div class="submit-loader d-none">
            <img src="{{asset('assets/images/'.$gs->loader)}}" alt="">
          </div>
          <div id="track-order">

          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- Order Tracking modal End -->

<script type="text/javascript">
  var mainurl = "{{url('/')}}";
  var gs      = {!! json_encode($gs) !!};
  var langg    = {!! json_encode($langg) !!};
</script>

<!-- jquery -->
<script src="{{asset('assets/front/js/all.js')}}"></script>
{{-- <script src="{{asset('assets/front/js/vue.js')}}"></script> --}}
{{-- <script src="{{asset('assets/front/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- popper -->
<script src="{{asset('assets/front/js/popper.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
<!-- plugin js-->
<script src="{{asset('assets/front/js/plugin.js')}}"></script>

<script src="{{asset('assets/front/js/xzoom.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.hammer.min.js')}}"></script>
<script src="{{asset('assets/front/js/setup.js')}}"></script>

<script src="{{asset('assets/front/js/toastr.js')}}"></script>
<!-- main -->
<script src="{{asset('assets/front/js/main.js')}}"></script>
<!-- custom -->
<script src="{{asset('assets/front/js/custom.js')}}"></script> --}}

{!! $seo->google_analytics !!}

@if($gs->is_talkto == 1)
<!--Start of Tawk.to Script-->
{!! $gs->talkto !!}
<!--End of Tawk.to Script-->
@endif

@yield('scripts')

</body>

</html>
<!-- <script type="text/javascript">
  $(function () {
    $(".navbar-dropdown a").click(function () {
        $(this).next().toggle();
        if ($('.dropdown-list:visible').length > 1) {
            $('.dropdown-list:visible').hide();
            $(this).next().show();
        }
    });
});
</script>
 -->
