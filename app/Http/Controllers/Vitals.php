<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PatientIdValidate;
use App\Patient;

class Vitals extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    	
        return view('vitals.list');
    }
    
    /**
     * Select the patient based on unique identifiers
     * 
     * @return \Illuminate\Http\Response
     */
     public function entry(Request $request)
     {     	
     	$request->session()->forget('vitals_patient_id');
     	return view('layout.search', [
     		'add'=>'vitals/entry',
     		'list'=>'vitals/entry',
     		'action'=>'/vitals/pass'	
     	]);
     }
     
     /**
      * Verify the patient id 
      */
     public function pass(PatientIdValidate $request)
     {     	
     	$patient = Patient::find($request->patient_id);
     	$name = $patient->first_name.' '.$patient->last_name;     	
     	if($name==$request->patient_id_search) {
     		$data = array();
     		$data = $patient->toArray();
     		$data['vitals_patient_id'] = $patient->patient_id;
     		session($data);
     		return redirect('vitals/create');
     	}
     	else{
     		$request->session()->forget('vitals_patient_id');
     		return redirect('vitals/entry')->with(
    			'msg', 'Invalid Patient Details'
    		);
     	}
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	if($this->isPatientIdSessionExist()) {    		
        	return view('vitals.form');
    	}
    	else {
    		return redirect('vitals/entry');
    	}
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    
    /**
     * To verify the session details along with patient id
     * 
     * @param void
     * @return boolean
     */
    private function isPatientIdSessionExist()
    {
		$patient_id = session('vitals_patient_id');
		$status = false;
		if(!empty($patient_id)) {
			$first_name = session('first_name');
			$last_name = session('last_name');
			$contact_no = session('contact_no');
			$patient_no = session('patient_no');			
			$patient = Patient::find($patient_id);
			$name = $patient->first_name.' '.$patient->last_name;
			if($first_name!=$patient->first_name ||
				 $last_name!=$patient->last_name ||
					$contact_no != $patient->contact_no || 
						$patient_no != $patient->patient_no) {
							
				$status = false;
			}
			else {
				$status = true;
			}		
		}
		return $status;		
    }
}
