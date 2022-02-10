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
            $table->bigInteger("department_id")->nullable()->unsigned();
            $table->bigInteger("grade_id")->nullable()->unsigned();
            $table->bigInteger("category_id")->nullable()->unsigned();
            $table->bigInteger("room_id")->nullable()->unsigned();
            $table->bigInteger("designation_id")->nullable()->unsigned();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('website')->nullable();
            $table->binary('photo')->nullable();
            $table->text('biographyFiledOfSpecialization')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign("grade_id")->references("id")->on("grades")->onDelete("cascade");
            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade");
            $table->foreign("designation_id")->references("id")->on("designations")->onDelete("cascade");
            $table->foreign("department_id")->references("id")->on("departments")->onDelete("cascade");
            $table->foreign("room_id")->references("id")->on("rooms")->onDelete("cascade");
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
