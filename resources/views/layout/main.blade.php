<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title','Quick Link')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/modern-business.css')}}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- FontAwesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>

    <!-- Main Stylesheet File -->
    <link href="{{asset('css/stingo.css')}}" rel="stylesheet">
    <link href="{{asset('css/style2.css')}}" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <div id="logo" class="pull-left">
            <!--<a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>-->
            <!-- Uncomment below if you prefer to use a text logo -->
            <h1><a href="{{url('/')}}">Quick Link</a></h1>
        </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/home')}}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                </li>
                <li class="nav-item dropdown" >
                    <a class="nav-link " href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-user-circle" style="font-size: 25px;"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="#" style="font-size: 20px;"> Session Name</a>,<br>
                        <a class="dropdown-item" href="#"><i class="fas fa-wrench"></i> Edit Account</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <form class="form-inline" style="margin-left: 190px; margin-top: 10px;">
        <input class="form-control mr-sm-2" style="width : 500px; " type="search" placeholder="Search item ..." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" style="margin-top: 10px;" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" style="margin-left: 60px; font-size : 20px;" href="#"><i class="far fa-bell" style="font-size: 25px; font-weight: 600;" id="symbols"></i><span class="badge badge-light">7</span> Notifications</a>
            <a class="nav-item nav-link" style="margin-left: 10px; font-size : 20px;" href="{{route('cart.index')}}"><i class="fab fa-opencart" style="font-size: 25px; font-weight: 600;" id="symbols"></i><span class="badge badge-light">{{Cart::count()}}</span> My Cart</a>
        </div>
    </div>
</nav>


@yield('content')

<!-- Footer -->
<footer class="py-5 bg-light">
    <div class="container">
        <p class="m-0 text-center text-black">Copyright &copy; Quick Link 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>


</body>

</html>
