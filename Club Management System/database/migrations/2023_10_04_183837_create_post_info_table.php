<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostInfoTable extends Migration
{
    public function up()
    {
        Schema::create('post_info', function (Blueprint $table) {
            $table->id('post_id'); // Primary key
            $table->string('post_title');
            $table->string('post_type');
            $table->date('post_date');
            $table->text('post_description');
            $table->string('writers_name');
            $table->string('club_name');
        });
    }

    public function down()
    {
        Schema::dropIfExists('post_info');
    }
}
