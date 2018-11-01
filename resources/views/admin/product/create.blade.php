@extends('admin.layout.admin')
@section('content')
    <br>
    <h2 class="brand-text" style="margin-left:220px">Add Product</h2><br><br>

    <div class="row justify-content-center" style="margin-left:210px">
        <div class="col-md-4 col-md-offset-2">
        {!! Form::open(['route' => 'product.store','method'=> 'post','files'=>true]) !!}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Description') }}
            {{ Form::textarea('description', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('price', 'Price(in dollars)') }}
            {{ Form::text('price', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('size', 'Size') }}
            {{ Form::text('size',  null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('category_id', 'Categories') }}
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control custom-select','id' => 'customSelect','placeholder'=>'Select Category']) }}
        </div>

        <div class="form-group">
            {{ Form::label('image', 'Image') }}
            {{ Form::file('image',array('class' => 'form-control')) }}
        </div><br>

        <div class="" style="margin-right:30px">
          {{ Form::submit('Create', array('class' => 'btn btn-danger btn-block btn-glow  mx-1')) }}
        </div><br><br>



        {!! Form::close() !!}
        </div>
    </div>
@endsection
