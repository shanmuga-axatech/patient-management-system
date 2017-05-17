<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PatientIdValidate;
use App\Patient;
use App\DoctorNoteDetails;

class DoctorsNotes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = DoctorNoteDetails::orderBy('note_id', 'desc')->paginate(3);
    	$params = $this->getPatientDetails();
    	$params['notes'] = $notes;
        return view('doctor-notes.list', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	if($this->isPatientIdSessionExist()) {    		
    		$params = $this->getPatientDetails();
        	return view('doctor-notes.form', $params);
    	}
    	else {
    		return redirect('doctor-notes/entry');
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
    	if($this->isPatientIdSessionExist()) {    		
       		$date = explode('/',$request->visit_date);
       		$vital = new DoctorNoteDetails();
       		$vital->patient_id = $request->patient_id;
       		$vital->patient_no = $request->patient_no;
       		$vital->visit_date = $date[2].'-'.$date[1].'-'.$date[0];       		
       		$vital->remarks = $request->remarks;
       		$vital->save();
       		return redirect('doctor-notes')->with(
	    		'msg', 'Notes updated successfully'
    		);       		
       }
       else {
       		return redirect('doctor-notes/entry');
       }
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
    	if($this->isPatientIdSessionExist()) {
    		$note = DoctorNoteDetails::find($id);
    		$note->delete();    		
    		return redirect('doctor-notes')->with(
    			'msg', 'Remarks details removed successfully'
    		);
    	}
    	else {
    		return redirect('doctor-notes');
    	}
    }
    
    /**
     * Select the patient based on unique identifiers
     *
     * @return \Illuminate\Http\Response
     */
    public function entry(Request $request)
    {
    	$request->session()->forget('drnotes_patient_id');
    	return view('layout.search', [
    			'add'=>'doctor-notes/entry',
    			'list'=>'doctor-notes/entry',
    			'action'=>'/doctor-notes/pass'
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
    		$data['drnotes_patient_id'] = $patient->patient_id;
    		session($data);
    		return redirect('doctor-notes/create');
    	}
    	else{
    		$request->session()->forget('drnotes_patient_id');
    		return redirect('doctor-notes/entry')->with(
    				'msg', 'Invalid Patient Details'
    				);
    	}
    }
    
    /**
     * To verify the session details along with patient id
     *
     * @param void
     * @return boolean
     */
    private function isPatientIdSessionExist()
    {
    	$patient_id = session('drnotes_patient_id');
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
    
    /**
     * To return the basic details of the patient
     *
     * @param void
     * @return array
     */
    private function getPatientDetails()
    {
    	$params = [
    			'patient_no'=>session('patient_no'),
    			'patient_id'=>session('patient_id'),
    			'patient_name'=>session('first_name').' '.session('last_name'),
    			'contact_no'=>session('contact_no'),
    			'age'=>session('age')
    	];
    	return $params;
    }
}
