<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('people_id');
            $table->string('name');
            $table->string('slug');
            $table->string('designation');
            $table->string('department')->nullable();
            $table->longText('bio');
            $table->string('email');
            $table->string('phone');
            $table->string('website_link')->nullable();
            $table->string('image')->nullable();
            $table->string('image_path')->nullable();
            $table->unsignedBigInteger('media_id')->nullable();
            $table->text('address')->nullable();
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
        Schema::dropIfExists('people_lists');
    }
}
