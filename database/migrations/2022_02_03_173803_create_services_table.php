<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_type_id')->references('id')->on('service_types')->onDelete('cascade');
            $table->string('title',191)->nullable();
            $table->string('sub_title',191)->nullable();
            $table->boolean('is_video')->default(false);
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('date')->nullable();
            $table->double('amount')->default(0);
            $table->double('discount_amount')->default(0);
            $table->boolean('is_free')->default(false);
            $table->json('tags')->nullable();
            $table->date('expire_date')->nullable();
            $table->boolean('is_limit')->default(false);
            $table->double('limit')->nullable();
            $table->integer('position')->default(1000);
            $table->boolean('status')->default(true);
            $table->softDeletes();
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
        Schema::dropIfExists('services');
    }
}
