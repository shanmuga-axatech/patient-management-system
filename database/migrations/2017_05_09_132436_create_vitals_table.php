<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vitals', function (Blueprint $table) {
            $table->increments('vital_id');
            $table->integer('patient_id');
            $table->integer('patient_no')->index();
            $table->integer('spo2');
            $table->integer('fbs');
            $table->integer('grbs');
            $table->integer('heartbeat');
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
        Schema::dropIfExists('vitals');
    }
}
