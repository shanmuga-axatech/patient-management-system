@extends('layout.template')
@section('list','vitals')
@section('add','vitals/create')
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
   <ul class="list-group">
    <li class="list-group-item">{{$patient_name}}</li>
    <li class="list-group-item"><strong>ID:</strong> {{$patient_no}}</li>
    <li class="list-group-item"><strong>Age:</strong> {{$age}}</li>
    <li class="list-group-item"><strong>Contact No:</strong> {{$contact_no}}</li>
  </ul>
  <hr />

<form method="post" action="/vitals/@yield('patient_id')" name="patient_register" id="patient_register">
  {{csrf_field()}}
  @section('form_method')
  @show
  
  <div class="form-group col-md-6">
    <label for="record_date">Record Date</label>
    <input type="text" class="form-control" value="@yield('record_date')" name="record_date" id="record_date" placeholder="dd/mm/yyyy">
  </div>
  <div class="form-group col-md-6">
    <label for="spo2">Peripheral Capillary Oxygen Saturation(SpO2)</label>
    <input type="text" class="form-control" value="@yield('spo2')" name="spo2" id="spo2" placeholder="The amount of oxygen in the blood">
  </div>
  <div class="form-group col-md-6">
    <label for="fbs">Fasting Blood Sugar(FBS)</label>
    <input type="text" class="form-control" value="@yield('fbs')" name="fbs" id="fbs" placeholder="Failed back syndrome fasting blood sugar">
  </div>
  <div class="form-group col-md-6">
    <label for="grbs">General Random Blood Sugar(GRBS)</label>
    <input type="text" class="form-control" value="@yield('grbs')" name="grbs" id="grbs" placeholder="General Random Blood Sugar">
  </div>
  <div class="form-group col-md-6">
    <label for="heartbeat">Heart Beat</label>
    <input type="text" class="form-control" value="@yield('heartbeat')" name="heartbeat" id="heartbeat" placeholder="Heart Beat">
  </div>
  <div class="col-md-12 text-center">
  	  <input type="hidden" name="patient_id" value="{{$patient_id}}" />
  	  <input type="hidden" name="patient_no" value="{{$patient_no}}" />
      <button class="btn btn-primary" type="submit" id="saveVitals"><i class="glyphicon glyphicon-ok-circle"></i>&nbsp;Save</button>
  </div>
</form>

@endsection