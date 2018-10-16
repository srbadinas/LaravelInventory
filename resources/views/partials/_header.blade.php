<div class="col-md-12" id="header-wrapper">
	<div class="col-md-6" id="header-left">
		<div class="text-center" id="navigation-toggle">
			<i class="glyphicon glyphicon-align-justify"></i>
		</div>
	</div>
	<div class="col-md-6" id="header-right">
		<div class="col-md-12 margin-top-bottom-10">
			<div class="dropdown pull-right">
				<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome, {{ Auth::user()->firstname }}</button>
				<ul class="dropdown-menu" aria-labelledby="dLabel">
					<li><a href="{{ route('users.show', Auth::user()->id) }}">View Profile</a></li>
					<li class="divider" role="separator"></li>
					<li><a href="{{ route('logout') }}">Sign-out</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

