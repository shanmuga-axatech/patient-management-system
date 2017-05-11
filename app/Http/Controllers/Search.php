<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class Search extends Controller
{
    public function patientDetails(Request $request)
    {
    	$patient = new Patient();    	
    	return $patient->autoCompleteSeacrh($request->term);    	
    }
}
