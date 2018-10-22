@extends('layout.main')

@section('content')

    <script src="https://js.stripe.com/v3/"></script>


    <form action="{{route('payment.store')}}" method="post" id="payment-form">
        {{csrf_field()}}
        <div class="form-row">
            <label for="card-element">
                Credit or debit card
            </label>
            <div id="card-element">
                <!-- A Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
        </div>

        <button>Submit Payment</button>
    </form>



    @endsection