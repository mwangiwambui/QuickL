<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Quick Link</title>
    <link rel="apple-touch-icon" href="{{asset('theme-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('theme-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('theme-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme-assets/vendors/css/charts/chartist.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('theme-assets/css/app-lite.css')}}">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('theme-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme-assets/css/pages/dashboard-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">
@include('admin.layout.includes.header')
<div class="page-content">
    @if(Session::has('message'))
        <div class="alert alert-info">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="">
        @include('admin.layout.includes.sidenav')
        <div class="">
            <div class="row text-center">
                <div class="col-md-12 col-md-offset-1">
                    <div class="content-box-large">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div><!--/Display area after sidenav-->
    </div>

</div><!--/Page Content-->

<footer class="footer footer-static footer-light navbar-border navbar-shadow">
  <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="#" target="_blank">Quick Link</a></span>
    <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
    </ul>
  </div>
</footer>

<script src="https://code.jquery.com/jquery.js"></script>
<script src="{{asset('js/parsley.min.js')}}"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!-- BEGIN VENDOR JS-->
<script src="{{asset('theme-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('theme-assets/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN CHAMELEON  JS-->
<script src="{{asset('theme-assets/js/core/app-menu-lite.js')}}" type="text/javascript"></script>
<script src="{{asset('theme-assets/js/core/app-lite.js')}}" type="text/javascript"></script>
<!-- END CHAMELEON  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('theme-assets/js/scripts/pages/dashboard-lite.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
<!-- END PAGE LEVEL JS-->
<script>
    $(document).ready(function () {
        $(".submenu > a").click(function (e) {
            e.preventDefault();
            var $li = $(this).parent("li");
            var $ul = $(this).next("ul");
            if ($li.hasClass("open")) {
                $ul.slideUp(350);
                $li.removeClass("open");
            } else {
                $(".nav > li > ul").slideUp(350);
                $(".nav > li").removeClass("open");
                $ul.slideDown(350);
                $li.addClass("open");
            }
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/dropzone.js"></script>
@yield('js')
</body>
</html>
