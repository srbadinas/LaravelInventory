@extends('main')

@section('title', 'Edit Category')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h3>Edit Category</h3>
			<hr>
			{!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'put']) !!}
				<div class="form-horizontal">
					<div class="form-group">
						<div class="col-md-4">
							{{ Form::label('name', 'Name:', ['class' => 'control-label']) }}
							{{ Form::text('name', null, ['class' => 'form-control']) }}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-4">
							<a href="{{ url()->previous() == route('categories.edit', $category->id) ? route('categories.show', $category->id) : url()->previous() }}" class="btn btn-danger btn-sm">Cancel</a>
							{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-sm']) }}
						</div>
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection