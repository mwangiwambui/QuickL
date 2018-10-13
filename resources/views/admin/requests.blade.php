@extends('admin.layout.admin')
@section('content')
    <h3>Requests</h3>

    <ul>
        @foreach($requests as $request)
            <li>
                <h4>Request by {{$request->industry->name}}</h4>

                <form action="{{route('toggle.accepted',$industry->id)}}" method="POST" class="pull-right">
                    {{csrf_field()}}
                    <label for="accepted">Approved</label>
                    <input type="checkbox" value="1" name="accepted" {{$industry->accepted==1?"checked":""}}>

                </form>
                <div class="clearfix"></div>
                <h5>Industries</h5>
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Goods</th>
                        <th>Location</th>
                    </tr>

                </table>

            </li>


        @endforeach
    </ul>

@endsection