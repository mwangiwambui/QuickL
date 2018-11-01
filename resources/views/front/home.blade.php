@extends('layout.main')
@section('content')
    <header>

      <!-- Slider -->

      <div class="main_slider" style="background-image:url(images/advert_1.jpg); ">
        <div class="container fill_height">
          <div class="row align-items-center fill_height">
            <div class="col">
              <div class="main_slider_content" style="float: right;">
                <h6 style="color: white;">Limited Edition 2018</h6><!-- description in application of advertisements 1 -->
                <h1 style="color: white;">Limited stock</h1><!-- description in application of advertisements 2 -->
                <div class="red_button shop_now_button"><a href="{{route('items')}}" style="font-size: 18px;">shop now</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Banner -->

      <div class="banner">
        <div class="container">
          <div class="row">
            <!-- category 1 -->
            <div class="col-md-4">
              <div class="banner_item align-items-center" style="background-image:url(images/home_tools.jpg)">
                <div class="banner_category">
                  <a href="{{route('items')}}">Hardware</a>
                </div>
              </div>
            </div>
            <!-- category 2 -->
            <div class="col-md-4">
              <div class="banner_item align-items-center" style="background-image:url(images/Electricals.jpeg)">
                <div class="banner_category">
                  <a href="{{route('items')}}">Electricals</a>
                </div>
              </div>
            </div>
            <!-- category 3 -->
            <div class="col-md-4">
              <div class="banner_item align-items-center" style="background-image:url(images/electronics.jpg)">
                <div class="banner_category">
                  <a href="{{route('items')}}">Electronics</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </header>

    <!-- Page Content -->

    <!-- New Arrivals -->

    <div class="new_arrivals">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <div class="section_title new_arrivals_title">
              <h2>New Arrivals</h2>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col">
            <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>


                        @forelse($items->chunk(4) as $chunk)
                            @foreach($chunk as $item)
                              <div class="product-item {{$categories}}">
                                <div class="product discount product_filter">
                                  <div class="product_image">
                                    <img src="{{url('images',$item->image)}}" alt="">
                                  </div>
                                  <div class="favorite favorite_left"></div>
                                  <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                  <div class="product_info">
                                    <h6 class="product_name"><a href="{{route('item',$item->id)}}">{{$item->name}}</a></h6>
                                    <h6 class="product_name">{{$item->description}}</h6>
                                    <div class="product_price">${{$item->price}}</div>
                                  </div>
                                </div>
                                <div class="red_button add_to_cart_button"><a href="{{route('cart.addItem',$item->id)}}">add to cart</a></div>
                              </div>
                            @endforeach
                        @empty
                            <h3>No items</h3>
                        @endforelse

                      </div>
                    </div>
                  </div>
                </div>
              </div><br><br>

    <!-- /.container -->
    @endsection
