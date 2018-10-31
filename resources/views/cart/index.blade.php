@extends('layout.main')
@section('content')
<br><br><br><br><br><br><br><br>
<div class="container">
  <div class="">
  	<div class="col-12">
  		<div class="card">
  			<div class="card-header">
  				<h4 class="card-title">Your Cart</h4>
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
                  <a class="btn btn-primary pull-right navbar-right"  href="{{route('checkout.shipping')}}">Checkout</a>
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
  									<th>refresh</th>
  									<th>Delete</th>
  								</tr>
  							</thead>
  							<tbody>
                    @foreach($cartItems as $cartItem)
  													<tr>
          									<th style="font-size:18px;" scope="row">1</th>
                            <td style="font-size:18px;">{{$cartItem->name}}</td>
          									<td style="font-size:18px;">{{$cartItem->price}}</td>
                            <td>
                                {!! Form::open(['route'=>['cart.update',$cartItem->rowId],'method'=>'PUT']) !!}
                                <input name="qty" type="text" class="form-control" style="width:40%;" value="{{$cartItem->qty}}">
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
						<tr>
							<td>
								<input name="description" type="text" class="form-control" style="width: 100%;height: 50%;" value="{{$cartItem->description}}">
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
