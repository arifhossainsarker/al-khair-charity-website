<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('type', 55)->default('admin'); // admin, alumni
            $table->unsignedBigInteger('role_id')->default(1)->comment('1 = Admin, 2 = Faculty, 3 = Editor, 4 = Alumni'); // Admin, Faculty, Editor
            $table->string('status', 55)->default('approved'); // pending, approved
            // Personal Information
            $table->string('first_name')->nullable();
            $table->string('last_name');
            $table->string('nick_name')->nullable();
            $table->string('email', 191)->unique();
            $table->string('mobile_number')->nullable();
            $table->timestamp('dob')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('profile_image')->nullable();
            // Others
            $table->longText('address')->nullable(); // Json data
            $table->string('password');
            $table->text('bio')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
