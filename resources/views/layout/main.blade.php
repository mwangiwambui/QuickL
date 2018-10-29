<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title','Quick Link')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/single_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/single_responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/categories_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/categories_responsive.css')}}">

</head>

<body>

<div class="super_container">

<!-- Navigation -->

<header class="header trans_300">

  <!-- Top Navigation -->

  <div class="top_nav">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="top_nav_left">For more assistance contact +254740233603</div>
        </div>
        <div class="col-md-6 text-right">
          <div class="top_nav_right">
            <ul class="top_nav_menu">

              <!-- Currency / Language / My Account -->


              <li class="language">
                <div id="google_translate_element"></div><script type="text/javascript">
                function googleTranslateElementInit() {
                  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
                </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

              </li>
              <li class="account">
                <a href="#">
                  My Account
                  <i class="fa fa-angle-down"></i>
                </a>
                <ul class="account_selection">
                  <li><a href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i>Sign In</a></li>
                  <li><a href="{{route('register')}}"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
                  <li><a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Navigation -->

  <div class="main_nav_container">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-right">
          <div class="logo_container">
            <a href="{{url('/')}}">Quick<span>Link</span></a>
          </div>
          <nav class="navbar">
            <ul class="navbar_menu">
              <li><a href="{{url('/')}}">home</a></li>
              <li><a href="{{url('/items')}}">shop</a></li>
              <li><a href="{{url('/contact')}}">contact</a></li>
              <li><a href="{{route('industry.request')}}">Register as Industry</a></li>
            </ul>
            <ul class="navbar_user">
              <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
              <li class="checkout">
                <a href="{{route('cart.index')}}">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  <span id="checkout_items" class="checkout_items">{{Cart::count()}}</span>
                </a>
              </li>
            </ul>
            <div class="hamburger_container">
              <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>

</header>

<div class="fs_menu_overlay"></div>
<div class="hamburger_menu">
  <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
  <div class="hamburger_menu_content text-right">
    <ul class="menu_top_nav">
      <li class="menu_item has-children">
        <a href="#">
          My Account
          <i class="fa fa-angle-down"></i>
        </a>
        <ul class="menu_selection">
          <li><a href="{{route('login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
          <li><a href="{{route('register')}}"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
        </ul>
      </li>
      <li class="menu_item"><a href="{{url('/')}}">home</a></li>
      <li class="menu_item"><a href="{{url('/items')}}">shop</a></li>
      <li class="menu_item"><a href="{{url('/contact')}}">contact</a></li>
      <li class="menu_item"><a href="{{route('industry.request')}}">register as industry</a></li>
    </ul>
  </div>
</div>


@yield('content')


<!-- Footer -->

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
          <ul class="footer_nav">
            <li><a href="#">Blog</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="{{url('/contact')}}">Contact us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
          <ul>
            <li><a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.skype.com"><i class="fab fa-skype"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="footer_nav_container">
          <div class="cr">©2018 All Rights Reserverd. This template is made with <i class="far fa-heart"></i> by <a href="#">Colorlib</a></div>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="">

</div>
<!-- Scripts -->

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/categories_custom.js')}}"></script>
<script src="{{asset('js/single_custom.js')}}"></script>
<<<<<<< HEAD
<script src="{{asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
=======
</div>
>>>>>>> 0ef4a8541e5fa5bd00a39f4e490f43b3843af38e

</body>

</html>
