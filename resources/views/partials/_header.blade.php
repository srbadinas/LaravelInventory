<div class="col-md-12" id="header-wrapper">
	<div class="col-md-6" id="header-left">
		<div class="text-center" id="navigation-toggle">
			<i class="glyphicon glyphicon-align-justify"></i>
		</div>
	</div>
	<div class="col-md-6" id="header-right">
		<div class="col-md-12" id="logout-container">
			<a href="{{ route('logout') }}" class="btn btn-primary pull-right">Welcome, {{ Auth::user()->firstname }}</a>
		</div>
	</div>
</div>

