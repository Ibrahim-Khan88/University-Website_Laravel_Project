<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrentResearchAndCollaborationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('current_research_and_collaborations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->nullable()->unsigned();
            $table->text('discription')->nullable();
            $table->bigInteger("users_registration_request_id")->nullable()->unsigned();
            $table->foreign("users_registration_request_id", "uregistrationrecsearch")->references("id")->on("users_registration_requests")->onDelete("cascade");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
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
        Schema::dropIfExists('current_research_and_collaborations');
    }
}
