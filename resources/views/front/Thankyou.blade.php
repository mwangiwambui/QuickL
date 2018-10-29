@extends('layout.main')
@section('title','404 error')
@section('content')

<!-- Page Content -->
<br><br><br><br><br><br><br><br>
    <div class="container">
      <div class="">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-content collapse show">
                <div class="card-body">
                  <div class="" style="margin-bottom: 50px;margin-top: 50px;margin-left:160px;">
                    <h2>Thankyou for Linking with Quicklink</h2><br><br><br>
                  </div>
                  <div class="col-md-8 red_button shop_now_button" style="font-size:18px; padding:10px; width:80%; margin-left: 180px;">
                    <a href="{{url('/')}}" style="font-size: 25px;">Continue shopping</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
