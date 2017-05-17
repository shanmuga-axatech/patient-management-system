<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PatientIdValidate;
use App\Patient;
use App\Http\Requests\VisitsValidate;
use App\VisitRecords;

class Visits extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visits = VisitRecords::orderBy('visit_id', 'desc')->paginate(3);
    	$params = $this->getPatientDetails();
    	$params['visits'] = $visits;
        return view('visits.list', $params);
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
        	return view('visits.form', $params);
    	}
    	else {
    		return redirect('visits/entry');
    	}
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VisitsValidate $request)
    {
        if($this->isPatientIdSessionExist()) {
        	$date = explode('/',$request->record_date);
        	$visit = new VisitRecords();
        	$visit->patient_id = $request->patient_id;
        	$visit->patient_no = $request->patient_no;
        	$visit->record_date =$date[2].'-'.$date[1].'-'.$date[0];        	
        	$visit->labdetails = $this->moveFile($request, 'labdetails');
        	$visit->prescription = $this->moveFile($request, 'prescription');
        	$visit->scanreports = $this->moveFile($request, 'scanreports');
        	$visit->remarks = $request->remarks;
        	$visit->save();
        	return redirect('visits')->with(
        		'msg', 'Visit details created successfully'
        	);
        }
        else {
        	return redirect('visits/entry');
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
    		$visit = VisitRecords::find($id);
    		$visit->delete();    		
    		return redirect('visits')->with(
    			'msg', 'Visit details removed successfully'
    		);
    	}
    	else {
    		return redirect('visits');
    	}
    }
    
    /**
     * To download the user lab/scan/prescription details
     * 
     * @param integer visit_id
     * @param string file type name
     */
    public function download($visit_id, $cate)
    {
    	$visit = VisitRecords::find($visit_id);    	
    	$filename = '';    	
    	switch ($cate) {
    		case 'lab':
    			$filename = $visit->labdetails;
    			break;
    		case 'pre':
    			$filename = $visit->prescription;
    			break;
    		case 'scn':
    			$filename = $visit->scanreports;
    			break;
    	}    	
    	if(!empty($filename) && !is_null($filename)) {
    		$fileurl = $visit->record_date.'/'.$visit->patient_id.'/'.$filename;
    		$filePath = public_path('uploads/'.$fileurl);
    		return response()->download($filePath);
    	}
    	return false;
    }
    
    /**
     * To get the download link from the given parameters
     * 
     * @param object visit object
     * @param string download category
     * @return string url or # 
     */
    public static function getDownloadLink($visit, $cate)
    {
    	$filename = '';
    	switch ($cate) {
    		case 'lab':
    			$filename = $visit->labdetails;
    			break;
    		case 'pre':
    			$filename = $visit->prescription;
    			break;
    		case 'scn':
    			$filename = $visit->scanreports;
    			break;
    	}
    	if(!empty($filename) && !is_null($filename)) {    		
    		$url = url('visits/download/'.$visit->visit_id.'/'.$cate);
    		return $url;
    	}
    	return '#';
    }
    
    /**
     * Select the patient based on unique identifiers
     *
     * @return \Illuminate\Http\Response
     */
    public function entry(Request $request)
    {
    	$request->session()->forget('visits_patient_id');
    	return view('layout.search', [
    			'add'=>'visits/entry',
    			'list'=>'visits/entry',
    			'action'=>'/visits/pass'
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
    		$data['visits_patient_id'] = $patient->patient_id;
    		session($data);
    		return redirect('visits/create');
    	}
    	else{
    		$request->session()->forget('visits_patient_id');
    		return redirect('visits/entry')->with(
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
    	$patient_id = session('visits_patient_id');
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
    
    /**
     * To move the file to the upload directory
     * 
     * @param object VisitsValidate request object
     * @return array Storage file paths
     */
    private function moveFile($request, $filename)
    {
    	$filepath = null;
    	$date = explode('/',$request->record_date);
    	$dateString = $date[2].'-'.$date[1].'-'.$date[0];    	
    	$folder =public_path('uploads').'/'.$dateString;
    	if(!is_dir($folder)) {
    		mkdir($folder);
    	}    	
    	
    	$folder .= '/'.$request->patient_id;
    	if(!is_dir($folder)) {
    		mkdir($folder);
    	}
    	
    	if($request->hasFile($filename)) {    	
    		$clientFileName = $request->file($filename)->getClientOriginalName();    		
    		$request->file($filename)->move($folder, $clientFileName);    		
    		return $clientFileName;
    	}
    	else {
    		return $filepath;
    	}    	
    }
    
}
