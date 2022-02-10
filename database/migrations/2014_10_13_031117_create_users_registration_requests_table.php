<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersRegistrationRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_registration_requests', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger("department_id")->nullable()->unsigned();
            // $table->bigInteger("grade_id")->nullable()->unsigned();
            // $table->bigInteger("category_id")->nullable()->unsigned();
            // $table->bigInteger("room_id")->nullable()->unsigned();
            // $table->bigInteger("designation_id")->nullable()->unsigned();
            $table->string('grade_name')->nullable();
            $table->string('category_name')->nullable();
            $table->string('department_name')->nullable();
            $table->string('room_number')->nullable();
            $table->string('designation_name')->nullable();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('website')->nullable();
            $table->binary('photo')->nullable();
            $table->text('biographyFiledOfSpecialization')->nullable();
            $table->string('password');
            $table->timestamps();
            // $table->foreign("grade_id")->references("id")->on("grades")->onDelete("cascade");
            // $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade");
            // $table->foreign("designation_id")->references("id")->on("designations")->onDelete("cascade");
            // $table->foreign("department_id")->references("id")->on("departments")->onDelete("cascade");
            // $table->foreign("room_id")->references("id")->on("rooms")->onDelete("cascade");
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_registration_requests');
    }
}
