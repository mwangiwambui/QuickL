@extends('admin.layout.admin')

@section('content')
<div class="row" style="margin-left: 245px;">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Products</h4>
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
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Number</th>
									<th>Name</th>
									<th>Category</th>
                  <th>.</th>
									<th>.</th>
								</tr>
							</thead>
							<tbody>
							<?php $value=1; ?>
                  @if(!empty($products))
                      @forelse($products as $product)
													<tr>
        									<th scope="row">{{$value++}}</th>
                          <td>{{$product->name}}</td>
                          <td>{{$product->category->name}}</td>
                          <td>
                            <div class="">
                              <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary btn-sm ">Edit Product</a>
                            </div>
                          </td>
                          <td>
                            <form action="{{route('product.destroy',$product->id)}}"  method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                            </form>
                          </td>
													</tr>
                        @empty
												<tr>

                          <th scope="row">1</th>
                          <td>No Products</td>
													</tr>
                      @endforelse
                  @endif

							</tbody>
						</table>

					</div>
          </div>
          </div>
          </div>
          </div>
          </div>



@endsection
