<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleQualificationValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_qualification_values', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('people_qualification_id');
            $table->foreignId('people_qualification_category_id');
            $table->text('value');
            $table->integer('position');
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
        Schema::dropIfExists('people_qualification_values');
    }
}
