@extends('layout.template') 
@section('content')
<form method="post" action="/register/store" name="patient_register" id="patient_register">
  <div class="form-group col-md-6">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
  </div>

  <div class="form-group col-md-6">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
  </div>
  <div class="form-group col-md-6">
    <label for="dob">Date of Birth</label>
    <input type="text" class="form-control" name="dob" id="dob" placeholder="Date of Birth">
  </div> 

  <div class="form-group col-md-6">
    <label for="age">Age</label>
    <input type="number" class="form-control" name="age" id="age" placeholder="Age">
  </div>
  
  <div class="col-md-6">
     <div class="radio">
      <label>
        <input type="radio" name="sex" id="sexMale" value="male" checked>
       Male
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="sex" id="sexFemale" value="female">
        Female
      </label>
    </div>   
    <div class="radio">
      <label>
        <input type="radio" name="sex" id="sexOther" value="others">
        Others
      </label>
    </div>   
  </div>
   <div class="form-group col-md-6">
    <label for="aadhar_no">Aadhar No</label>
    <input type="text" class="form-control" name="aadhar_no" id="aadhar_no" placeholder="Aadhar No">
  </div> 

  <div class="form-group col-md-12">
    <label for="address1">Address Line 1</label>
    <input type="text" class="form-control" name="address1" id="address1" placeholder="Address Line 1">
  </div>
  <div class="form-group col-md-12">
    <label for="address2">Address Line 2</label>
    <input type="text" class="form-control" name="address2" id="address2" placeholder="Address Line 2">
  </div>
  <div class="form-group col-md-6">
    <label for="contact_no">Contact No:</label>
    <input type="number" class="form-control" name="contact_no" id="contact_no" placeholder="Contact No">
  </div>
   <div class="form-group col-md-6">
    <label for="city">City:</label>
    <input type="text" class="form-control" name="city" id="city" placeholder="City">
  </div>  
  <div class="form-group col-md-12">
    <label for="remarks">Remarks</label>
    <textarea rows="3" name="remarks" id="remarks" class="form-control" placeholder="Enter comments"></textarea>
  </div>
  <div class="col-md-12 text-center">
      <button class="btn btn-primary" type="submit" id="savePatient" >Save &amp; Next&nbsp;<i class="glyphicon glyphicon-menu-right"></i></button>
  </div>
</form>

@endsection