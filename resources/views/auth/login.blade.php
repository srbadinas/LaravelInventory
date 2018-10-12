@extends('main')

@section('title', 'Login')

@section('content')
    <div class="row">
		<div class="col-md-12">
			<div class="col-md-4 col-md-offset-4">
				<div class="row">
					<h3>Laravel Inventory</h3>
					<hr>
				</div>
				{!! Form::open(['route' => 'login', 'method' => 'post']) !!}

					<div class="form-horizontal">
						<div class="form-group">
							{{ Form::label('username', 'Username:', ['class' => 'control-label']) }}
							{{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Enter Username']) }}
						</div>

						<div class="form-group">
							{{ Form::label('password', 'Password:', ['class' => 'control-label']) }}
							{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter Password']) }}
						</div>
					</div>

					<div class="form-group">
						<div class="checkbox">
							<label>
								{{ Form::checkbox('remember') }} Remember Me
							</label>
						</div>
					</div>

					<div class="row">
						{{ Form::submit('Log in', ['class' => 'btn btn-default btn-block']) }}
					</div>

				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
