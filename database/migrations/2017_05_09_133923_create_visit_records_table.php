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
        	$table->engine = 'InnoDB';
            $table->increments('visit_id');
            $table->unsignedInteger('patient_id');
            $table->integer('patient_no')->index();
            $table->date('record_date');
            $table->string('labdetails')->nullable();
            $table->string('prescription')->nullable();
            $table->string('scanreports')->nullable();
            $table->string('remarks')->nullable();
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
