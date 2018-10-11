<div class="col-md-12" id="header-wrapper">
	<div class="col-md-6" id="header-left">
		<div class="text-center" id="navigation-toggle">
			<i class="glyphicon glyphicon-align-justify"></i>
		</div>
	</div>
	<div class="col-md-6" id="header-right">
		<div class="col-md-12" id="logout-container">
			{{-- <a href="{{ route('logout') }}" class="btn btn-primary pull-right">Welcome, {{ Auth::user()->firstname }}</a> --}}
				<button class="btn btn-primary pull-right" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome, {{ Auth::user()->firstname }}</button>
			<ul class="dropdown-menu pull-right" aria-labelledby="dLabel">
				<li><a href="{{ route('users.show', Auth::user()->id) }}">View Profile</a></li>
				<li><a href="{{ route('logout') }}">Sign-out</a></li>
			</ul>
		</div>
	</div>
</div>

