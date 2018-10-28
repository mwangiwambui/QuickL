@extends('admin.layout.admin')
@section('content')
    <h3>Edit User Role</h3>

    <div class="row justify-content-center">
        <div class="col-md-4 col-md-offset-2">
            {!! Form::model($users,['route' => ['users.update',$users->id],'method'=>'PATCH']) !!}

            <div class="form-group">
                {{ Form::label('Users_role', 'Users_role') }}
                {{ Form::text('users_role', null, array('class' => 'form-control')) }}
            </div>



            {{ Form::submit('Update User', array('class' => 'btn btn-default')) }}


            {!! Form::close() !!}
        </div>
    </div>


@endsection