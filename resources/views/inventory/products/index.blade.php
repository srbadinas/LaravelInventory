@extends('main')

@section('title', 'Products')

@section('content')
	<div class="row">
		{{-- <hr> --}}
		<div class="col-md-12">
			<h3>Products</h3>
			<hr>
		</div>
		<div class="col-md-12">
			<div class="col-md-12">
				{{-- {!! Form::open(['route' => 'users.search', 'method' => 'post']) !!}
					<div class="row">
						<div class="form-inline">
							<div class="form-group">
								{{ Form::label('search_by', 'Search By:') }}
								{{ Form::select('search_by', [
										'id' => 'ID',
										'username' => 'Username',
										'lastname' => 'Lastname',
										'firstname' => 'Firstname',
									], null, ['class' => 'form-control']) }}
							</div>
							<div class="form-group">
								<div class="input-group">
									{{ Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Search']) }}
			      					<span class="input-group-btn">
			        					<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
			        				</span>
								</div>
							</div>
							<div class="form-group pull-right">
								<a href="{{ route('users.create') }}" class="btn btn-success pull-right">Create New User</a>
							</div>
						</div>
					</div>
				{!! Form::close() !!} --}}
			</div>
		</div>

		<div class="col-md-12 margin-top-10">
			<div class="table-responsive">
				<table class="table table-striped table-condensed">
					<thead>
						<tr class="info">
							<th>#</th>
							<th>Name</th>
							<th>Category</th>
							<th>Price</th>
							<th>Published</th>
							<th>Date Created</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($products as $product)
							<tr>
								<th>{{ $product->id }}</th>
								<td>{{ $product->name }}</td>
								<td>{{ $product->category->name }}</td>
								<td>{{ $product->price }}</td>
								<td><h6><span class="label {{ $product->published ? "label-success" : "label-danger" }}">{{ $product->published ? "Yes" : "No" }}</span></h6></td>
								<td>{{ date('M j, Y', strtotime($product->created_at)) }}</td>
								<td>
									<a href="{{ route('products.show', $product->id) }}">View</a> | <a href="{{ route('products.edit', $product->id) }}">Edit</a>
								</td>
							</tr>
						@endforeach	
					</tbody>
				</table>
			</div>
			<div class="text-center">
				{!! $products->links() !!}
			</div>
		</div>
	</div>
@endsection