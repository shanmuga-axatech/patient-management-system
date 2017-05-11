@extends('layout.template')
@section('list',$list)
@section('add',$add)
@section('content')
@if(count($errors)>0)
	<div class="alert alert-danger">
        <ul>
			@foreach($errors->all() as $error)
			 <li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>	
@endif
<form method="post" action="{{$action}}" name="patientSearch">
{{csrf_field()}}
<input type="hidden" name="patient_id" id="patient_id" value="" />
	<div class="input-group">
		<input type="text" class="form-control" name="patient_id_search" id="patient_id_search"
			placeholder="Patient ID / Contact No / Aadhar Id"> <span
			class="input-group-btn">
			<button class="btn btn-primary" type="submit">
				Go <i class="glyphicon glyphicon-chevron-right"></i>
			</button>
		</span>
	</div>
<!-- /input-group -->
</form>
@endsection
