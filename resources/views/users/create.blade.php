@extends('main')

@section('title', 'Create New User')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h3>Create New User</h3>
			<hr>
			{!! Form::open(['route' => 'users.store', 'method' => 'post']) !!}
				<div class="form-horizontal">
					<div class="form-group">
						<div class="col-md-4">
							{{ Form::label('username', 'Username:', ['class' => 'control-label']) }}
							{{ Form::text('username', null, ['class' => 'form-control']) }}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-4">
							{{ Form::label('email', 'Email Address:', ['class' => 'control-label']) }}
							{{ Form::text('email', null, ['class' => 'form-control']) }}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-4">
							{{ Form::label('lastname', 'Lastname:', ['class' => 'control-label']) }}
							{{ Form::text('lastname', null, ['class' => 'form-control']) }}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-4">
							{{ Form::label('firstname', 'Firstname:', ['class' => 'control-label']) }}
							{{ Form::text('firstname', null, ['class' => 'form-control']) }}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-4">
							{{ Form::label('contact_number', 'Contact Number:', ['class' => 'control-label']) }}
							 <div class="input-group">
							    <span class="input-group-addon">+63</span>
								{{ Form::number('contact_number', null, ['class' => 'form-control']) }}
							 </div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-4">
							<a href="{{ route('users.index') }}" class="btn btn-default btn-sm">Back to List</a>
							{{ Form::submit('Create New User', ['class' => 'btn btn-success btn-sm']) }}
						</div>
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection