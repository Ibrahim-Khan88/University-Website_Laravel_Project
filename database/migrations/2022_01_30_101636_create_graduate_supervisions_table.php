<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraduateSupervisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduate_supervisions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->nullable()->unsigned();
            $table->text('discription')->nullable();
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->bigInteger("users_registration_request_id")->nullable()->unsigned();
            $table->foreign("users_registration_request_id")->references("id")->on("users_registration_requests")->onDelete("cascade");
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
        Schema::dropIfExists('graduate_supervisions');
    }
}
