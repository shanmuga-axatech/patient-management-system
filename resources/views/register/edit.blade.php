@extends('register.form', ['sex' => $patient->sex])
@section('first_name', $patient->first_name)
@section('last_name', $patient->last_name)
@section('dob', date('d/m/Y', strtotime($patient->dob)))
@section('age', $patient->age)
@section('address1', $patient->address1)
@section('address2', $patient->address2)
@section('contact_no', $patient->contact_no)
@section('aadhar_no', $patient->aadhar_no)
@section('city', $patient->city)
@section('remarks', $patient->remarks)
@section('sex', $patient->sex)
@section('patient_id', $patient->patient_id)

@section('form_method')
	<input name="_method" type="hidden" value="PUT">
@endsection