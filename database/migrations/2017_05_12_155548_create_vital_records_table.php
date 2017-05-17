<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVitalRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vital_records', function (Blueprint $table) {
        	$table->engine = 'InnoDB';
            $table->increments('vital_id');
            $table->unsignedInteger('patient_id');
            $table->integer('patient_no')->index();
            $table->date('record_date');
            $table->integer('spo2')->nullable();
            $table->integer('fbs')->nullable();
            $table->integer('grbs')->nullable();
            $table->integer('heartbeat')->nullable();           
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
        Schema::dropIfExists('vital_records');
    }
}
