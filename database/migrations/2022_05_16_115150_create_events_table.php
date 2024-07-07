<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->string('position')->nullable();
            $table->text('location_address')->nullable();
            $table->text('location_map')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_tags')->nullable();
            $table->tinyInteger('feature_type')->default(0)->comment('0=image,1=video');
            $table->string('image')->nullable();
            $table->string('image_path')->nullable();
            $table->string('video')->nullable();
            $table->unsignedBigInteger('media_id')->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('featured')->default(0); // 0, 1
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
        Schema::dropIfExists('events');
    }
}
