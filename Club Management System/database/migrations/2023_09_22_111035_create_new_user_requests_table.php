<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewUserRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('new_user_requests', function (Blueprint $table) {
            $table->string('user_id')->unique();
            $table->string('user_name');
            $table->string('user_email')->unique();
            $table->string('contact_number');
            $table->string('gender');
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('new_user_requests');
    }
};
