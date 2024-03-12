<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTestegratisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('freetest', function (Blueprint $table) {
            $table->id();
            $table->integer('softwareId');
            $table->string('ip');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('businessname');
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
        Schema::dropIfExists('freetest');
    }
}
