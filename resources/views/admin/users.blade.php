@extends('admin.layout.admin')
@section('content')


            <div class="row justify justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="card-title">All Users</h4>

                            @if($success= Session::has('message'))
                                <div class="alert alert-success"><p>{{ $success }}</p></div>

                            @endif
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>Name</th>
                                <th>Email</th>
                                <th>User_role</th>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>

                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->users_role}}</td>

                                        <td> {!! Form::open(array('route'=>['users.destroy',$user->id],'method'=>'DELETE')) !!}
                                            {{link_to_route('users.edit','Edit Role',[$user->id],['class'=>'btn btn-primary'])}}
                                            |

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

@endsection