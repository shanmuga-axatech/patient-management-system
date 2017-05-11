<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Patient extends Model
{    
	/**
	 * Change the default primary key
	 * @var string
	 */
	protected $primaryKey = 'patient_id';
	
    /**
     * fetch next patient register number
     * 
     * @param void
     * @return number
     */
	public function getNextPatientNo()
	{
		$patient_no = DB::table('patients')->max('patient_no');
		return $patient_no+1;
	}
	
	/**
	 * Fetch the patient details based on search parameter
	 * 
	 * @param string $search
	 * 
	 * @return object result
	 */
	public function autoCompleteSeacrh($search)
	{
		$data = array();
		$params = [
			$search,
			$search,
			'%'.$search.'%',
			'%'.$search.'%',
			$search
		];
		$sql = 'SELECT * FROM patients 
				WHERE aadhar_no=? OR 
				patient_no=? OR 
				first_name LIKE ? OR 
				last_name LIKE ? OR 
				contact_no=? 
				LIMIT 5';
		$result = DB::select($sql, $params);
		
		foreach($result as $row) {
			$item = array();
			$item['label'] = $row->first_name.' '.$row->last_name;
			$item['value'] = $row->first_name.' '.$row->last_name;
			$item['patient_no'] = $row->patient_no;
			$item['patient_id'] = $row->patient_id;
			$item['contact_no'] = $row->contact_no;
			$item['age'] = $row->age;
			$data[] =  $item;
		}
		
		return $data;
	}
}
