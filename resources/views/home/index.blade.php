@extends('layout.template') @section('content')
<div class="container hidden-md hidden-lg visible-xs visible-sm">
	<div class="row">
		<div class="col-md-3">&nbsp;</div>
		<div class="col-md-6">
			<a href="/register/create" class="btn btn-primary btn-block"><i
				class="glyphicon glyphicon-user"></i>&nbsp; New Registeration</a>
		</div>
		<div class="col-md-3">&nbsp;</div>
	</div>

	<div class="row">
		<div class="col-md-3">&nbsp;</div>
		<div class="col-md-6">
			<a href="/vitals/entry" class="btn btn-primary btn-block"><i
				class="glyphicon glyphicon-tent"></i>&nbsp;Lab / Vitals</a>
		</div>
		<div class="col-md-3">&nbsp;</div>
	</div>

	<div class="row">
		<div class="col-md-3">&nbsp;</div>
		<div class="col-md-6">
			<a href="visits/entry" class="btn btn-primary btn-block"><i
				class="glyphicon glyphicon-calendar"></i>&nbsp;Visit Records</a>
		</div>
		<div class="col-md-3">&nbsp;</div>
	</div>

	<div class="row">
		<div class="col-md-3">&nbsp;</div>
		<div class="col-md-6">
			<a href="doctor-notes/entry" class="btn btn-primary btn-block"><i
				class="glyphicon glyphicon-briefcase"></i>&nbsp;Doctor's Notes</a>
		</div>
		<div class="col-md-3">&nbsp;</div>
	</div>

	<!-- <div class="row">
		<div class="col-md-3">&nbsp;</div>
		<div class="col-md-6">
			<a href="http://localhost/seva/index.php/register"
				class="btn btn-primary btn-block">Pharmacy View</a>
		</div>
		<div class="col-md-3">&nbsp;</div>
	</div> -->
</div>

<div class="container hidden-xs hidden-sm visible-md visible-lg">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
					aria-expanded="false">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">SEVA TRUST</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/register/create"><i class="glyphicon glyphicon-user"></i>&nbsp;
							New Registeration</a></li>
					<li><a href="/vitals/entry" class="btn btn-primary btn-block"><i
							class="glyphicon glyphicon-tent"></i>&nbsp;Lab / Vitals</a></li>
					<li><a href="visits/entry" class="btn btn-primary btn-block"><i
							class="glyphicon glyphicon-calendar"></i>&nbsp;Visit Records</a></li>
					<li><a href="doctor-notes/entry" class="btn btn-primary btn-block"><i
							class="glyphicon glyphicon-briefcase"></i>&nbsp;Doctor's Notes</a></li>					
					<!-- <li><a href="http://localhost/seva/index.php/register"
						class="btn btn-primary btn-block">Pharmacy View</a></li> -->
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

</div>
@endsection
