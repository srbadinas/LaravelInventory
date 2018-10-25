@extends('main')

@section('title', 'Category Details')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h3>Category Details</h3>
			<hr>
			
		</div>

		<div class="col-md-12">
			<div class="col-md-8">
				<dl class="dl-horizontal">
	  				<dt>ID:</dt>
	  				<dd>{{ $category->id }}</dd>
	  				<dt>Name:</dt>
	  				<dd>{{ $category->name }}</dd>
	  				<dt>Created By:</dt>
	  				<dd>{{ $category->user_created->firstname }} {{ $category->user_created->lastname }}</dd>
	  				<dt>Updated By:</dt>
	  				<dd>{{ $category->user_updated->firstname }} {{ $category->user_updated->lastname }}</dd>
	  				<dt>Date Created:</dt>
	  				<dd>{{ date('M j, Y h:i:s A', strtotime($category->created_at)) }}</dd>
	  				<dt>Date Updated:</dt>
	  				<dd>{{ date('M j, Y h:i:s A', strtotime($category->updated_at)) }}</dd>
				</dl>
			</div>
		</div>

		<div class="col-md-12">
			<a href="{{ route('categories.index') }}" class="btn btn-default btn-sm">Back to List</a>
			<a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target=".delete-modal" target="_blank">Delete</a>
			<div class="modal fade delete-modal">
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
			<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
		</div>

	</div>
@endsection