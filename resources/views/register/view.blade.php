@extends('layout.template') 
@section('list','register')
@section('add','register/create')
@section('content')
<div class="panel panel-default">
	<!-- user details -->
	<ul class="list-group">
	    <li class="list-group-item">{{$patient->first_name}} {{$patient->last_name}}</li>
	    <li class="list-group-item"><strong>ID:</strong> {{$patient->patient_no}}</li>    
	    <li class="list-group-item"><strong>Sex:</strong> {{ucfirst($patient->sex)}}</li> 
	    <li class="list-group-item"><strong>Date Of Birth:</strong> {{date('d/m/Y', strtotime($patient->dob))}}</li>
	    <li class="list-group-item"><strong>Age:</strong> {{$patient->age}}</li>
	    <li class="list-group-item"><strong>Address:</strong> {{$patient->address1}}, {{$patient->address2}}</li>
	    <li class="list-group-item"><strong>City:</strong> {{$patient->city}}</li>
	    <li class="list-group-item"><strong>Contact No:</strong> {{$patient->contact_no}}</li>
	    <li class="list-group-item"><strong>Aadhar No:</strong> {{$patient->aadhar_no}}</li>
	    <li class="list-group-item">{{$patient->remarks}}</li>
  	</ul>
  	<!-- user details end-->
  
</div>
@endsection