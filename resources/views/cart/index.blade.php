@extends('layout.main')
@section('content')
<br><br><br><br><br><br><br><br>
<div class="super_container">
  <div class="">
  	<div class="col-12">
  		<div class="card">
  			<div class="card-header">
  				<h4 class="card-title">Your Cart</h4>
  				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
  			</div>
  			<div class="card-content collapse show">
  				<div class="card-body">
  					<div class="" style="margin-bottom: 75px;">
              <div class="row">
                <div class="col-md-2"style="font-size:15px;">
                  Items - {{Cart::count()}}
                </div>
                <div class="col-md-2"style="font-size:15px;">
                  Tax - ${{Cart::tax()}}
                </div>
                <div class="col-md-2" style="font-size:15px;">
                  Sub Total - ${{Cart::subtotal()}}
                </div>
                <div class="col-md-3" style="font-size:15px;">
                  Grand Total - ${{Cart::total()}}
                </div>
                <div class="col-md-3">
                  <a class="btn btn-primary pull-right navbar-right" style="font-size:18px;"  href="{{route('checkout.shipping')}}">Checkout</a>
                </div>
              </div>
            </div>

  					<div class="table-responsive">
  						<table class="table">
  							<thead>
  								<tr>
  									<th>#</th>
                    <th>Name</th>
                    <th>Price/unit</th>
                    <th>Quantity</th>
                    <th>Size</th>
                                    <th>contact industry</th>
  									<th>refresh</th>
  									<th>Delete</th>

  								</tr>
  							</thead>
  							<tbody>
                    @foreach($cartItems as $cartItem)
  													<tr>
          									<td style="font-size:18px;" scope="row">{{$cartItem->id}}</td>
                            <td style="font-size:18px;">{{$cartItem->name}}</td>
          									<td style="font-size:18px;">{{$cartItem->price}}</td>
                            <td>
                                {!! Form::open(['route'=>['cart.update',$cartItem->rowId],'method'=>'PUT']) !!}
                                <input name="qty" type="text" class="form-control" style="width:90px;height:35px;" value="{{$cartItem->qty}}">
                            </td>
                            <td>
                                {!! Form::select('size', ['small'=>'Small','medium'=>'Medium','large'=>'Large'] , $cartItem->options->has('size')?$cartItem->options->size:'' ) !!}
                            </td>

                            <td>
                              <button style="float: left" type="submit" class="btn btn-primary"><i class="fas fa-sync-alt"></i></button>
                              {!! Form::close() !!}
                              {{--<a class="button" href="{{route('cart.destroy',$cartItem->rowId}}"Delete--}}
                              {{--</a>--}}
                            </td>

                                                        <td>
                              <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="POST">
                                  {{csrf_field()}}
                                  {{method_field('DELETE')}}
                                  <button class="btn btn-danger  btn-glow  mx-1" type="submit"><i class="far fa-trash-alt"></i></button>
                              </form>
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
