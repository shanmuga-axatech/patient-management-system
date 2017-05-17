@extends('layout.template') @section('content')
<div class="row">
	<div class="col-md-3">&nbsp;</div>
	<div class="col-md-6">
		<a href="/register/create"
			class="btn btn-primary btn-block"><i class="glyphicon glyphicon-user"></i>&nbsp;
			New Registeration</a>
	</div>
	<div class="col-md-3">&nbsp;</div>
</div>

<div class="row">
	<div class="col-md-3">&nbsp;</div>
	<div class="col-md-6">
		<a href="/vitals/entry"
			class="btn btn-primary btn-block"><i class="glyphicon glyphicon-tent"></i>&nbsp;Lab / Vitals</a>
	</div>
	<div class="col-md-3">&nbsp;</div>
</div>

<div class="row">
	<div class="col-md-3">&nbsp;</div>
	<div class="col-md-6">
		<a href="visits/entry"
			class="btn btn-primary btn-block"><i class="glyphicon glyphicon-calendar"></i>&nbsp;Visit Records</a>
	</div>
	<div class="col-md-3">&nbsp;</div>
</div>

<div class="row">
	<div class="col-md-3">&nbsp;</div>
	<div class="col-md-6">
		<a href="doctor-notes/entry"
			class="btn btn-primary btn-block"><i class="glyphicon glyphicon-briefcase"></i>&nbsp;Doctor's Notes</a>
	</div>
	<div class="col-md-3">&nbsp;</div>
</div>

<div class="row">
	<div class="col-md-3">&nbsp;</div>
	<div class="col-md-6">
		<a href="doctor-notes/entry"
			class="btn btn-primary btn-block"><i class="glyphicon glyphicon-search"></i>&nbsp;Patients Detailed View</a>
	</div>
	<div class="col-md-3">&nbsp;</div>
</div>

<div class="row">
	<div class="col-md-3">&nbsp;</div>
	<div class="col-md-6">
		<a href="http://localhost/seva/index.php/register"
			class="btn btn-primary btn-block">Pharmacy View</a>
	</div>
	<div class="col-md-3">&nbsp;</div>
</div>

@endsection
