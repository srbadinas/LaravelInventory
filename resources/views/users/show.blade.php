@extends('main')

@section('title', 'User Details')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h3>User Details</h3>
			<hr>
			
		</div>

		<div class="col-md-12">
			<div class="col-md-8">
				<dl class="dl-horizontal">
	  				<dt>ID:</dt>
	  				<dd>{{ $user->id }}</dd>
	  				<dt>Username:</dt>
	  				<dd>{{ $user->username }}</dd>
	  				<dt>Email Address:</dt>
	  				<dd>{{ $user->email }}</dd>
	  				<dt>Lastname:</dt>
	  				<dd>{{ $user->lastname }}</dd>
	  				<dt>Firstname:</dt>
	  				<dd>{{ $user->firstname }}</dd>
	  				<dt>Contact Number:</dt>
	  				<dd>{{ $user->contact_number }}</dd>
				</dl>
			</div>
			<div class="col-md-4">
				<div class="well">
					<dl class="dl-horizontal">
		  				<dt>Date Created:</dt>
		  				<dd>{{ date('M j, Y h:i:s A', strtotime($user->created_at)) }}</dd>
					</dl>
					<dl class="dl-horizontal">
		  				<dt>Date Updated:</dt>
		  				<dd>{{ date('M j, Y h:i:s A', strtotime($user->updated_at)) }}</dd>
					</dl>
					<div class="row">
						<div class="col-sm-6">
							<a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm btn-block">Edit</a>
						</div>
						<div class="col-sm-6">
							{!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
								{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm btn-block']) !!}
							{!! Form::close() !!}
						</div>
						<div class="col-sm-12 margin-top-sm">
							<a href="{{ route('users.index') }}" class="btn btn-default btn-block">Back to List</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection