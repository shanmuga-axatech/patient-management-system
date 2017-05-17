<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorNoteDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_note_details', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('note_id');
            $table->unsignedInteger('patient_id');
            $table->integer('patient_no')->index();
            $table->date('visit_date');
            $table->string('remarks', 1000);
            $table->foreign('patient_id')->references('patient_id')->on('patients')->onDelete('cascade');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_note_details');
    }
}
