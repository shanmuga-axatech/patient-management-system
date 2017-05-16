<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VitalRecords extends Model
{
    /**
	 * Change the default primary key
	 * @var string
	 */
	protected $primaryKey = 'vital_id';
}
