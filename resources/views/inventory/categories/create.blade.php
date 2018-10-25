@extends('main')

@section('title', 'Create New Category')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h3>Create New Category</h3>
			<hr>
			{!! Form::open(['route' => 'categories.store', 'method' => 'post']) !!}
				<div class="form-horizontal">
					<div class="form-group">
						<div class="col-md-4">
							{{ Form::label('name', 'Name:', ['class' => 'control-label']) }}
							{{ Form::text('name', null, ['class' => 'form-control']) }}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-4">
							<a href="{{ route('categories.index') }}" class="btn btn-default btn-sm">Back to List</a>
							{{ Form::submit('Create', ['class' => 'btn btn-success btn-sm']) }}
						</div>
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection