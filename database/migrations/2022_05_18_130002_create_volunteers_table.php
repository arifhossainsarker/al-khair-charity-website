<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('name_title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('dob');
            $table->text('address');
            $table->text('street_address')->nullable();
            $table->text('address_line_2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('country');
            $table->string('gender');
            $table->string('disability');
            $table->string('disability_desc')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('volunteered_exp')->nullable();
            $table->string('occupation')->nullable();
            $table->string('volunteering_area_int')->nullable();
            $table->string('ref_name')->nullable();
            $table->string('ref_relation')->nullable();
            $table->string('ref_email')->nullable();
            $table->string('ref_mobile')->nullable();
            $table->string('emg_name')->nullable();
            $table->string('emg_relation')->nullable();
            $table->string('emg_email')->nullable();
            $table->string('emg_phone')->nullable();
            $table->string('criminal_bg')->nullable();

            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('volunteers');
    }
}
