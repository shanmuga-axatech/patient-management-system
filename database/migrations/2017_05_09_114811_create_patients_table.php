<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('patient_id');
            $table->integer('patient_no')->unique();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->date('dob');
            $table->tinyInteger('age');
            $table->enum('sex', ['male', 'female', 'others']);
            $table->string('address1');
            $table->string('address2');
            $table->string('contact_no', 100);
            $table->char('aadhar_no', 20);
            $table->string('city', 100);
            $table->string('remarks', 1000);
            $table->integer('doctor_id');
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
        Schema::dropIfExists('patients');
    }
}
