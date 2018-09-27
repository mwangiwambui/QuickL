@extends('layout.main')
@section('title','Item')
@section('content')

    <!-- Page Content -->
    <div class="container">

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/')}}">Home</a>
            </li>
            <li class="breadcrumb-item active">Item</li>
        </ol><br><br><br>

        <!-- Portfolio Item Row -->
        <div class="row">
            <div class="row col-md-8">
                <div class="col-md-6">
                    <img class="img-fluid" src="http://placehold.it/750x500" alt="">
                </div>

                <div class="col-md-6">
                    <h3 class="my-3">Item name<br>
                        <small>brief description</small></h3>
                    <div class="">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Size</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div><br>
                    <h6>Units: <input class="" style="width :80px;margin-left: 20px; margin-right: 20px;" type="text" text="1"></h6>
                    <h6>Price: <input class="" style="width :80px;margin-left: 20px; margin-right: 20px;" type="text" text="1"></h6>
                    <br><br><br>

                    <button class="btn btn-outline-success my-2 my-sm-0" style="margin-right:40px; font-weight:600; font-size:15px;"><i class="fas fa-cart-arrow-down" style="font-size: 18px;"></i> <a href="{{}}">Add to cart</a></button>
                    <button class="btn btn-outline-success my-2 my-sm-0" style="font-weight:600; font-size:15px;"><i class="far fa-envelope" style="font-size: 18px;"></i> Contact Industry</button>
                </div>

            </div><br><br>
            <div class="col-md-3" style="margin-left:30px;">
                <div>
                    <h4>Industry name</h4>
                    <p>Location</p>
                    <p>brief description</p>
                    <span class="heading" style="font-size:20px;">User Rating</span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <p>4.1 average based on 254 reviews.</p>
                    <hr style="border:3px solid #f1f1f1">

                    <div class="row">
                        <div class="side">
                            <div>5 star</div>
                        </div>
                        <div class="middle">
                            <div class="bar-container">
                                <div class="bar-5"></div>
                            </div>
                        </div>
                        <div class="side right">
                            <div>150</div>
                        </div>
                        <div class="side">
                            <div>4 star</div>
                        </div>
                        <div class="middle">
                            <div class="bar-container">
                                <div class="bar-4"></div>
                            </div>
                        </div>
                        <div class="side right">
                            <div>63</div>
                        </div>
                        <div class="side">
                            <div>3 star</div>
                        </div>
                        <div class="middle">
                            <div class="bar-container">
                                <div class="bar-3"></div>
                            </div>
                        </div>
                        <div class="side right">
                            <div>15</div>
                        </div>
                        <div class="side">
                            <div>2 star</div>
                        </div>
                        <div class="middle">
                            <div class="bar-container">
                                <div class="bar-2"></div>
                            </div>
                        </div>
                        <div class="side right">
                            <div>6</div>
                        </div>
                        <div class="side">
                            <div>1 star</div>
                        </div>
                        <div class="middle">
                            <div class="bar-container">
                                <div class="bar-1"></div>
                            </div>
                        </div>
                        <div class="side right">
                            <div>20</div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>

        <!-- /.row -->

        <!-- Related Projects Row -->
        <h3 class="my-4">Other items you might like</h3><br>

        <div class="row">

            <div class="col-md-3 col-sm-6 mb-4">
                <a href="#">
                    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <a href="#">
                    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <a href="#">
                    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <a href="#">
                    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    @endsection