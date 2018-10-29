@extends('admin.layout.admin')
@section('content')
<div class="row" style="margin-left: 245px;">
  <div class="col-12">
      <div class="card">
          <div class="">
              <div class="card-header">
                  <h4 class="card-title">Orders</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
              </div>
              @foreach($orders as $order)
              <div class="card-content collapse show">
                <div class="card-body">
                  <div class="" style="margin-bottom: 30px;">
                    <div class="row">
                      <div class="col-md-4"style="font-size:15px;">
                        Order by - {{$order->user->name}}
                      </div>
                      <div class="col-md-4"style="font-size:15px;">
                        Total Price - {{$order->total}}
                      </div>
                      <div class="col-md-4">
                        <form action="{{route('toggle.deliver',$order->id)}}" method="POST" class="pull-right">
                            {{csrf_field()}}
                            <label for="delivered">Delivered</label>
                            <input type="checkbox" value="1" name="delivered" {{$order->delivered==1?"checked":""}}>
                            <input class="btn btn-primary " type="submit" value="Submit">

                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                      <table class="table">
                          <thead>
                            <th>Name</th>
                            <th>qty</th>
                            <th>price</th>
                          </thead>
                          <tbody>
                            @foreach($order->orderItems as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->pivot->qty}}</td>
                                    <td>{{$item->pivot->total}}</td>
                                </tr>
                            @endforeach
                          </tbody>
                      </table>

                  </div>
                </div>
              </div><br><br><br><br><hr><br><br>
              @endforeach
          </div>
      </div>
  </div>
</div>

@endsection
