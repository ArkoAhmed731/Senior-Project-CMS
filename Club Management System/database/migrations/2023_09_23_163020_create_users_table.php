<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('user_id')->unique();
            $table->string('user_name');
            $table->string('user_email')->unique();
            $table->string('contact_number');
            $table->enum('gender', ['male', 'female']);
            $table->string('password');
            $table->text('bio')->nullable();
            $table->enum('user_type', ['super admin', 'club admin', 'official', 'general']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
