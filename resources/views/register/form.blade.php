@extends('layout.template') 
@section('list','register')
@section('add','register/create')
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
<form method="post" action="/register/@yield('patient_id')" name="patient_register" id="patient_register">
  {{csrf_field()}}
  @section('form_method')
  @show
  <div class="form-group col-md-6">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" value="@yield('first_name')" name="first_name" id="first_name" placeholder="First Name">
  </div>
  <div class="form-group col-md-6">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" value="@yield('last_name')" name="last_name" id="last_name" placeholder="Last Name">
  </div>
  <div class="form-group col-md-6">
    <label for="dob">Date of Birth</label>
    <input type="text" class="form-control" value="@yield('dob')" name="dob" id="dob" placeholder="Date of Birth">
  </div>
  <div class="form-group col-md-6">
    <label for="age">Age</label>
    <input type="number" class="form-control" value="@yield('age')" name="age" id="age" placeholder="Age">
  </div>
  <?php	$sexValue = isset($sex)?$sex:''; ?>
  <div class="col-md-6">
     <div class="radio">
      <label>
        <input type="radio" name="sex" id="sexMale" value="male" <?php if($sexValue=='male') echo " checked='checked'"; ?>>
       Male
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="sex" id="sexFemale" value="female" <?php if($sexValue=='female') echo " checked='checked'"; ?>>
        Female
      </label>
    </div>   
    <div class="radio">
      <label>
        <input type="radio" name="sex" id="sexOther" value="others" <?php if($sexValue=='others') echo " checked='checked'"; ?>>
        Others
      </label>
    </div>   
  </div>
   <div class="form-group col-md-6">
    <label for="aadhar_no">Aadhar No</label>
    <input type="text" class="form-control" value="@yield('aadhar_no')" name="aadhar_no" id="aadhar_no" placeholder="Aadhar No">
  </div> 
  <div class="form-group col-md-12">
    <label for="address1">Address Line 1</label>
    <input type="text" class="form-control" value="@yield('address1')" name="address1" id="address1" placeholder="Address Line 1">
  </div>
  <div class="form-group col-md-12">
    <label for="address2">Address Line 2</label>
    <input type="text" class="form-control" value="@yield('address2')" name="address2" id="address2" placeholder="Address Line 2">
  </div>
  <div class="form-group col-md-6">
    <label for="contact_no">Contact No:</label>
    <input type="number" class="form-control" value="@yield('contact_no')" name="contact_no" id="contact_no" placeholder="Contact No">
  </div>
   <div class="form-group col-md-6">
    <label for="city">City:</label> 
    <input type="text" class="form-control" value="@yield('city')" name="city" id="city" placeholder="City">
  </div>  
  <div class="form-group col-md-12">
    <label for="remarks">Remarks</label>
    <textarea rows="3" name="remarks" id="remarks" class="form-control" placeholder="Enter comments">@yield('remarks')</textarea>
  </div>
  <div class="col-md-12 text-center">
  	  <input type="hidden" name="patient_id" value="@yield('patient_id')" />
      <button class="btn btn-primary" type="submit" id="savePatient"><i class="glyphicon glyphicon-ok-circle"></i>&nbsp;Save</button>
  </div>
</form>
@endsection