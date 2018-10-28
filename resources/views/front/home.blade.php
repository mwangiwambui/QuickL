@extends('layout.main')
@section('content')
    <header>

      <!-- Slider -->

      <div class="main_slider" style="background-image:url(images/slider_1.jpg)">
        <div class="container fill_height">
          <div class="row align-items-center fill_height">
            <div class="col">
              <div class="main_slider_content">
                <h6>Spring / Summer Collection 2017</h6>
                <h1>Get up to 30% Off New Arrivals</h1>
                <div class="red_button shop_now_button"><a href="#">shop now</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Banner -->

      <div class="banner">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="banner_item align-items-center" style="background-image:url(images/banner_1.jpg)">
                <div class="banner_category">
                  <a href="categories.html">women's</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="banner_item align-items-center" style="background-image:url(images/banner_2.jpg)">
                <div class="banner_category">
                  <a href="categories.html">accessories's</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="banner_item align-items-center" style="background-image:url(images/banner_3.jpg)">
                <div class="banner_category">
                  <a href="categories.html">men's</a>
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
        <div class="row align-items-center">
          <div class="col text-center">
            <div class="new_arrivals_sorting">
              <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
                <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">women's</li>
                <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">accessories</li>
                <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">men's</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>


                        @forelse($items->chunk(4) as $chunk)
                            @foreach($chunk as $item)
                              <div class="product-item men">
                                <div class="product discount product_filter">
                                  <div class="product_image">
                                    <img src="{{url('images',$item->image)}}" alt="">
                                  </div>
                                  <div class="favorite favorite_left"></div>
                                  <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                  <div class="product_info">
                                    <h6 class="product_name"><a href="{{route('item',$item->id)}}">{{$item->name}}</a></h6>
                                    <h6 class="product_name">{{$item->description}}</h6>
                                    <div class="product_price">${{$item->price}}<span>$590.00</span></div>
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

              <!-- Deal of the week -->

              <div class="deal_ofthe_week">
                <div class="container">
                  <div class="row align-items-center">
                    <div class="col-lg-6">
                      <div class="deal_ofthe_week_img">
                        <img src="{{asset('images/deal_ofthe_week.png')}}" alt="">
                      </div>
                    </div>
                    <div class="col-lg-6 text-right deal_ofthe_week_col">
                      <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
                        <div class="section_title">
                          <h2>Deal Of The Week</h2>
                        </div>
                        <ul class="timer">
                          <li class="d-inline-flex flex-column justify-content-center align-items-center">
                            <div id="day" class="timer_num">03</div>
                            <div class="timer_unit">Day</div>
                          </li>
                          <li class="d-inline-flex flex-column justify-content-center align-items-center">
                            <div id="hour" class="timer_num">15</div>
                            <div class="timer_unit">Hours</div>
                          </li>
                          <li class="d-inline-flex flex-column justify-content-center align-items-center">
                            <div id="minute" class="timer_num">45</div>
                            <div class="timer_unit">Mins</div>
                          </li>
                          <li class="d-inline-flex flex-column justify-content-center align-items-center">
                            <div id="second" class="timer_num">23</div>
                            <div class="timer_unit">Sec</div>
                          </li>
                        </ul>
                        <div class="red_button deal_ofthe_week_button"><a href="#">shop now</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    <!-- /.container -->
    @endsection
