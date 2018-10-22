@extends('layout.payment')

@section('content')

<script src="https://js.stripe.com/v3/"></script>

<br><br><br><br><br><br><br><br>
    <div class="container">
      <div class="">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">
                <h4>Enter Card Details</h4>                
              </div>
              <div class="card-content collapse show">
                <div class="card-body">
                  <div class="" style="margin-bottom: 50px;margin-top: 50px;">
                    <form action="{{route('payment.store')}}" method="post" id="payment-form">
                        {{csrf_field()}}
                        <div class="form-row justify justify-content-center">
                            <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>
                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                        </div><br><br><br>
                        <div class="row">
                          <div class="col-md-2">

                          </div>
                          <div class="col-md-8">
                            <button class="btn btn-dark btn-block btn-glow  mx-1 " style="font-size:18px; padding:10px; width:100%;">Pay : <span style="font-size:20px;">${{Cart::total()}}</span></button>
                          </div>
                          <div class="col-md-2">

                          </div>
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
    @endsection
