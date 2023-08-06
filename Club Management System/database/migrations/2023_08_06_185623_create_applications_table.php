<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('application_id');
            $table->string('application_title', 200);
            $table->string('application_type');
            $table->date('application_date');
            $table->string('application_description', 2000);
            $table->string('applicant_name');
            $table->timestamps();
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
