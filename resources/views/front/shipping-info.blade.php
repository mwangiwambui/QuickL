@extends('layout.main')

@section('content')
    <div class="container">
      <br><br><br><br><br><br><br><br><br>
      <div class="row justify-content-center">
          <div class="col-md-4 col-md-offset-2 small-centered columns">
      <h3>Shipping Info</h3><br>
      {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

      <div class="form-group">
          {{ Form::label('addressline', 'Address Line') }}
          {{ Form::text('addressline', null, array('class' => 'form-control')) }}
      </div>

      <div class="form-group">
          {{ Form::label('city', 'City') }}
          {{ Form::text('city', null, array('class' => 'form-control')) }}
      </div>
      <div class="form-group">
          {{ Form::label('state', 'State') }}
          {{ Form::text('state', null, array('class' => 'form-control')) }}
      </div>
      <div class="form-group">
          {{ Form::label('zip', 'Zip') }}
          {{ Form::text('zip', null, array('class' => 'form-control')) }}
      </div>
      <div class="form-group">
          {{ Form::label('country', 'Country') }}
          {{ Form::text('country', null, array('class' => 'form-control')) }}
      </div>
      <div class="form-group">
          {{ Form::label('phone', 'Phone') }}
          {{ Form::text('phone', null, array('class' => 'form-control')) }}
      </div><br><br>

      <div class="" style="margin-right: 30px; margin-left: 25px;">
        {{ Form::submit('Proceed to Payment', array('class' => 'btn btn-danger btn-block btn-glow  mx-1')) }}
      </div>

      {!! Form::close() !!}

    </div>

        </div>
    </div>

    @endsection
