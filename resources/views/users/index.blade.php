@extends('main')

@section('title', 'Users')

@section('content')
	<div class="row">
		{{-- <hr> --}}
		<div class="col-md-12">
			<h3>Users</h3>
			<hr>
		</div>
		<div class="col-md-12">
			<div class="col-md-4">
				<div class="row">
					<div class="has-feedback">
					  	<input type="text" class="form-control" placeholder="Search">
					  	<span class="glyphicon glyphicon-search form-control-feedback"></span>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<a href="{{ route('users.create') }}" class="btn btn-success btn-sm pull-right">Create New User</a>
			</div>
		</div>

		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-striped table-condensed">
					<thead>
						<tr class="info">
							<th>ID</th>
							<th>Username</th>
							<th>Lastname</th>
							<th>Firstname</th>
							<th>Date Created</th>
							<th>Date Updated</th>
							<th>Status</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users->all() as $user)
							<tr>
								<th>{{ $user->id }}</th>
								<td>{{ $user->username }}</td>
								<td>{{ $user->lastname }}</td>
								<td>{{ $user->firstname }}</td>
								<td>{{ date('M j, Y', strtotime($user->created_at)) }}</td>
								<td>{{ date('M j, Y', strtotime($user->updated_at)) }}</td>
								<td><h6><span class="label {{ $user->is_active ? "label-success" : "label-danger" }}">{{ $user->is_active ? "Active" : "Inactive" }}</span></h6></td>
								<td>
									<a href="{{ route('users.show', $user->id) }}">View</a> | <a href="{{ route('users.edit', $user->id) }}">Edit</a>
								</td>
							</tr>
						@endforeach	
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection