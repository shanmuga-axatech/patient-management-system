@extends('layout.template') 
@section('list','visits')
@section('add','visits/create') 
@section('content')
@if(count($errors)>0)
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li> @endforeach
	</ul>
</div>
@endif
<ul class="list-group">
	<li class="list-group-item">{{$patient_name}}</li>
	<li class="list-group-item"><strong>ID:</strong> {{$patient_no}}</li>
	<li class="list-group-item"><strong>Age:</strong> {{$age}}</li>
	<li class="list-group-item"><strong>Contact No:</strong>
		{{$contact_no}}</li>
</ul>
<hr />

<form method="post" action="/visits/@yield('patient_id')"
	name="patient_register" id="patient_register" enctype="multipart/form-data">
	{{csrf_field()}} @section('form_method') @show

	<div class="form-group col-md-6">
		<label for="record_date">Record Date</label> <input type="text"
			class="form-control" value="{{$record_date}}" name="record_date"
			id="record_date" placeholder="dd/mm/yyyy">
	</div>
	<div class="form-group col-md-6">
		<label for="labdetails">Lab Details</label> 
		<input type="file" name="labdetails" id="labdetails" />
		<p class="help-block">Upload Lab report files.</p>
	</div>
	<div class="form-group col-md-6">
		<label for="prescription">Dr's Prescription</label> 
		<input type="file" name="prescription" id="prescription" />
		<p class="help-block">Upload Dr's Prescription files.</p>
	</div>
	<div class="form-group col-md-6">
		<label for="scanreports">Scan Reports</label> 
		<input type="file" name="scanreports" id="scanreports" />
		<p class="help-block">Upload Scan Report files.</p>
	</div>
	<div class="form-group col-md-12">
		<label for="remarks">Notes</label> 
		<textarea class="form-control" id="remarks" name="remarks" rows="2"></textarea>
		<p class="help-block">Important/General Notes.</p>
	</div>
	<div class="col-md-12 text-center">
		<input type="hidden" name="patient_id" value="{{$patient_id}}" /> <input
			type="hidden" name="patient_no" value="{{$patient_no}}" />
		<button class="btn btn-primary" type="submit" id="saveVitals">
			<i class="glyphicon glyphicon-ok-circle"></i>&nbsp;Save
		</button>
	</div>
</form>

@endsection
