<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// database/migrations/2023_07_30_XXXXXX_create_club_table.php


class CreateClubTable extends Migration
{
    public function up()
    {
        Schema::create('club', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('user_email');
            $table->string('contact_number');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('club_position');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('club');
    }
}
