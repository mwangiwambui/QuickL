@extends('admin.layout.admin')
@section('content')
    <h3>Requests</h3>

    <ul>
        @foreach($industries as $industry)
            <li>
                <h4>Request by {{$industry->user->name}} <br>Name of Industry: {{$industry->companyname}}</h4>

                <form action="{{route('toggle.accepted',$industry->id)}}" method="POST" class="pull-right">
                    {{csrf_field()}}
                    <label for="accepted">Approved</label>
                    <input type="checkbox" value="1" name="accepted" {{$industry->accepted==1?"checked":""}}>

                </form>
                <div class="clearfix"></div>
                <h5>Industries</h5>
                <table class="table table-bordered">
                    <tr>a

                        <th>CompanyName</th>
                        <th>License</th>
                    </tr>
                    @foreach($industries as $request)
                        <tr>

                            <td>{{$request->companyname}}</td>
                            <td>{{$request->license}}</td>

                        </tr>
                    @endforeach


                </table>

            </li>


        @endforeach
    </ul>

@endsection