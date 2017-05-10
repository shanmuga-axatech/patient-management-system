<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterValidate;
use App\Patient;

class Register extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$patients = Patient::orderBy('patient_no', 'desc')->limit(10)->get();    	
        return view('register.list')->with('patients', $patients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterValidate $request)
    {    	    	
    	$patientRegister = new Patient();
    	$patientId = $patientRegister->getNextPatientNo();
    	$patientRegister->patient_no = $patientId;
    	$patientRegister->first_name = $request->first_name;
    	$patientRegister->last_name = $request->last_name;
    	$patientRegister->dob = date('Y-m-d', strtotime($request->dob));
    	$patientRegister->age = $request->age;
    	$patientRegister->sex = $request->sex;
    	$patientRegister->address1 = $request->address1;
    	$patientRegister->address2 = $request->address2;
    	$patientRegister->contact_no = $request->contact_no;
    	$patientRegister->aadhar_no = $request->aadhar_no;
    	$patientRegister->city = $request->city;
    	$patientRegister->remarks = $request->remarks;
    	$patientRegister->doctor_id = 0;
    	$patientRegister->save();
    	redirect('/register')->with(
    		'msg', 
    		'Patient Details Registered Successfully. Patient ID: '.$patientId
    	);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
