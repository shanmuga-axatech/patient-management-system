<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Patient extends Model
{    
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
}
