@extends('admin.layout.admin')
@section('content')
<div class="row" style="margin-left: 245px;">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Edit user role</h4>
      </div>
      <div class="card-content collapse show">
        <div class="card-body row " style="margin-left:490px">
          <div class="col-md-4 col-md-offset-2">
              {!! Form::model($users,['route' => ['users.update',$users->id],'method'=>'PATCH']) !!}

              <div class="form-group">
                  {{ Form::label('Users_role', 'Users_role') }}
                  {{ Form::text('users_role', null, array('class' => 'form-control')) }}
              </div>

              <div class="" style="margin-right:25px;">
                {{ Form::submit('Update User', array('class' => 'btn btn-danger btn-block btn-glow  mx-1')) }}
              </div>

              {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
