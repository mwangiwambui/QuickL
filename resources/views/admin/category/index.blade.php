@extends('admin.layout.admin')

@section('content')

<div class="row" style="margin-left: 245px;">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Categories</h4>
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
            <a class="btn btn-primary pull-right navbar-right" data-toggle="modal" href="#category">Add Category</a>
          </div>

					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Number</th>
									<th>Category Name</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
							<?php $value=1;?>
                  @if(!empty($categories))
                      @forelse($categories as $category)
													<tr>
        									<th scope="row">{{$value++}}</th>

														<td><h5><a href="{{route('category.show',$category->id)}}"> {{$category->name}}</a></h5></td>
        									<td>
                            {{-- delete button --}}
                            <form action="{{route('category.destroy',$category->id)}}"  method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button class="btn btn-sm btn-danger" type="submit"><i class="la la-trash"></i></button>
                            </form>
                          </td>
													</tr>
                        @empty
												<tr>

                          <th scope="row">1</th>
                          <td>No categories</td>
													</tr>
                      @endforelse
                  @endif

							</tbody>
						</table>

					</div>

					@if(isset($products))

						<h3>Products</h3>

						<table class="table table-hover">
							<thead>
							<tr>
								<th>Products</th>
							</tr>
							</thead>
							<tbody>
							@forelse($products as $product)
								<tr><td>{{$product->name}}</td></tr>
							@empty
								<tr><td>no data</td></tr>
							@endforelse

							</tbody>
						</table>
					@endif





				</div>
			</div>
		</div>
	</div>
</div>

    <div class="navbar">

        <a class="btn btn-primary pull-right navbar-right" data-toggle="modal" href="#category">Add Category</a>
        <div class="modal fade" id="category">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Add New</h4>
                    </div>
                    {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
                    <div class="modal-body">
                        <div class="form-group">
                            {{ Form::label('name', 'Title') }}
                            {{ Form::text('name', null, array('class' => 'form-control')) }}
							{{ Form::label('parent_id', 'Main Category') }}
							{{Form::select('parent_id', $maincategories, null, ['class' => 'form-control custom-select','id' => 'customSelect','placeholder'=>'Select Category']) }}

									</div>

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    {!! Form::close() !!}
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>




@endsection
