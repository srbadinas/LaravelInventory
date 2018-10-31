@extends('main')

@section('title', 'Categories')

@section('content')
	<div class="row">
		{{-- <hr> --}}
		<div class="col-md-12">
			<h3>Categories</h3>
			<hr>
		</div>
		<div class="col-md-12">
			<div class="col-md-12">
				{!! Form::open(['route' => 'categories.search', 'method' => 'get']) !!}
					<div class="row">
						<div class="form-inline">
							<div class="form-group">
								{{ Form::label('search_by', 'Search By:') }}
								{{ Form::select('search_by', [
										'id' => 'ID',
										'name' => 'Name',
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
								<a href="{{ route('categories.create') }}" class="btn btn-success pull-right">Create New Category</a>
							</div>
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>

		<div class="col-md-12 margin-top-10">
			<div class="table-responsive">
				<table class="table table-striped table-condensed">
					<thead>
						<tr class="info">
							<th>#</th>
							<th>Category</th>
							<th>Date Created</th>
							<th>Date Updated</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($categories as $category)
							<tr>
								<th>{{ $category->id }}</th>
								<td>{{ $category->name }}</td>
								<td>{{ date('M j, Y', strtotime($category->created_at)) }}</td>
								<td>{{ date('M j, Y', strtotime($category->updated_at)) }}</td>
								<td>
									<a href="{{ route('categories.show', $category->id) }}">View</a> | 
									<a href="{{ route('categories.edit', $category->id) }}">Edit</a> |
									<a href="#" data-toggle="modal" data-target=".delete-{{ $category->id }}-modal" target="_blank">Delete</a>
									<div class="modal fade delete-{{ $category->id }}-modal">
									  <div class="modal-dialog modal-lg">
									    <div class="modal-content">
									      <!-- Modal Header -->
									      <div class="modal-header">
									        <h4 class="modal-title">Delete Category</h4>
									      </div>
									      <!-- Modal body -->
									      <div class="modal-body">
									        <div class="alert alert-danger" role="alert">
									        	Are you sure you want to delete this category?
											</div>
									      </div>

									      <!-- Modal footer -->
									      <div class="modal-footer">
									        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
									        {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
									        	{{ Form::submit('Delete', ['class' => 'btn btn-danger pull-right']) }}
									        {!! Form::close() !!}
									      </div>

									    </div>
									  </div>
									</div> <!-- End of Modal -->
								</td>
							</tr>
						@endforeach	
					</tbody>
				</table>
			</div>
			<div class="text-center">
				{!! $categories->links() !!}
			</div>
		</div>
	</div>
@endsection