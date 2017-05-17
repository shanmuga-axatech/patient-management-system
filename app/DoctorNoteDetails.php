<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorNoteDetails extends Model
{
    /**
	 * Change the default primary key
	 * @var string
	 */
	protected $primaryKey = 'note_id';
}
