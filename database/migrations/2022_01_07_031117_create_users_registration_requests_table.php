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
            $table->string("department_name")->nullable();
            $table->string("room_number")->nullable();
            $table->string('name');
            $table->string('designation')->nullable();
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('website');
            $table->binary('photo');
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
            $table->text('roles')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users_registration_requests');
    }
}
