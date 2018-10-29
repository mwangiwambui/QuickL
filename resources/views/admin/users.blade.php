@extends('admin.layout.admin')
@section('content')
  <div class="row" style="margin-left: 245px;">
    <div class="col-12">
        <div class="card">
            <div class="">
                <div class="card-header">
                    <h4 class="card-title">Users</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            				<div class="heading-elements">
            					<ul class="list-inline mb-0">
            						<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            						<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
            						<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            						<li><a data-action="close"><i class="ft-x"></i></a></li>
            					</ul>
            				</div>
                    @if($success= Session::has('message'))
                        <div class="alert alert-success"><p>{{ $success }}</p></div>

                    @endif
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <th>id</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>User_role</th>
                              <th>.</th>
                              <th>.</th>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                  <td>{{$user->id}}</td>
                                  <td>{{$user->name}}</td>
                                  <td>{{$user->email}}</td>
                                  <td>{{$user->users_role}}</td>
                                  <td>
                                    {!! Form::open(array('route'=>['users.destroy',$user->id],'method'=>'DELETE')) !!}
                                    {{link_to_route('users.edit','Edit Role',[$user->id],['class'=>'btn btn-primary'])}}
                                  </td>
                                  <td>
                                    {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                    {!! Form::close() !!}
                                  </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>


                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>

@endsection
