@extends('layout.main')
@section('content')
<div class="container">
  <br><br><br><br><br><br><br><br><br>
  <div class="row justify-content-center">
      <div class="col-md-4 col-md-offset-2 small-centered columns">
  <h3>Shipping Info</h3><br>
            @if($success= Session::has('message'))
                <div class="alert alert-success"><p>{{ $success }}</p></div>

            @endif
            {!! Form::open(['route' => 'request.store','method'=> 'post','files'=>true]) !!}
            <div class="form-group">
                {{ Form::label('companyname', 'Company Name') }}
                {{ Form::text('companyname', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>
            <div class="form-group">
                {{ Form::label('mail', 'Company Mailing address') }}
                {{ Form::text('mail', null, array('class' => 'form-control','required'=>'')) }}
            </div>
            <div class="form-group">
                {{ Form::label('city', 'City') }}
                {{ Form::text('city', null, array('class' => 'form-control','required'=>'')) }}
            </div>

            <div class="form-group">
                {{ Form::label('state', 'State') }}
                {{ Form::text('state', null, array('class' => 'form-control','required'=>'')) }}
            </div>
            <div class="form-group">
                {{ Form::label('country', 'Country') }}
                {{ Form::text('country', null, array('class' => 'form-control','required'=>'')) }}
            </div>

            <div class="form-group">
                {{ Form::label('contact', 'Company Phonenumber') }}
                {{ Form::text('contact', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('capital', 'Nominal Capital') }}
                {{ Form::text('capital', null, array('class' => 'form-control')) }}
            </div>


            <div class="form-group">
                {{ Form::label('license', 'Company License') }}
                {{ Form::file('License',array('class' => 'form-control')) }}
            </div><br>

            <div class="" style="margin-right:30px">
                {{ Form::submit('Register', array('class' => 'btn btn-danger btn-block btn-glow  mx-1')) }}
            </div><br><br>



            {!! Form::close() !!}
        </div>
    </div>
    </div>
@endsection
