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
            $table->bigInteger("room_id")->nullable()->unsigned();
            $table->string('name');
            $table->string('designation')->nullable();
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('website')->nullable();
            $table->binary('photo')->nullable();
            $table->text('biographyFiledOfSpecialization')->nullable();
            $table->text('researchInterest')->nullable();
            $table->text('currentResearchAndCollaboration')->nullable();
            $table->text('fellowshipOfScientificAndProfessionalSociaties')->nullable();
            $table->text('educationExperience')->nullable();
            $table->text('teachingExperience')->nullable();
            $table->text('researchExperience')->nullable();
            $table->text('awardAndRecognition')->nullable();
            $table->text('publication')->nullable();
            $table->text('journals')->nullable();
            $table->text('conference')->nullable();
            $table->text('graduateSupervision')->nullable();
            $table->text('courseOffered')->nullable();
            $table->text('courseMaterial')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            //$table->foreign("department_id")->references("id")->on("departments")->onDelete("cascade");
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
        Schema::dropIfExists('users');
    }
}
