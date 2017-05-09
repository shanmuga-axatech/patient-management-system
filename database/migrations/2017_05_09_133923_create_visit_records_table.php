<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit_records', function (Blueprint $table) {
            $table->increments('visit_id');
            $table->integer('patient_id');
            $table->integer('patient_no')->index();
            $table->date('visit_date');
            $table->enum('record_type', ['scan', 'lab', 'prescription']);            
            $table->string('file_location');
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
        Schema::dropIfExists('visit_records');
    }
}
