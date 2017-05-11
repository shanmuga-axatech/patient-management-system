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
		<a href="/vitals/create"
			class="btn btn-primary btn-block"><i class="glyphicon glyphicon-tent"></i>&nbsp;Lab / Vitals</a>
	</div>
	<div class="col-md-3">&nbsp;</div>
</div>

<div class="row">
	<div class="col-md-3">&nbsp;</div>
	<div class="col-md-6">
		<a href="http://localhost/seva/index.php/register"
			class="btn btn-primary btn-block">Visit Records</a>
	</div>
	<div class="col-md-3">&nbsp;</div>
</div>

<div class="row">
	<div class="col-md-3">&nbsp;</div>
	<div class="col-md-6">
		<a href="http://localhost/seva/index.php/register"
			class="btn btn-primary btn-block">Doctor's Notes</a>
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
