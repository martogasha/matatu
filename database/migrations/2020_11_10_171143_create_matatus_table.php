<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matatus', function (Blueprint $table) {
            $table->id();
            $table->string('plate');
            $table->string('name')->nullable();
            $table->string('type');
            $table->integer('sacco_id');
            $table->integer('target');
            $table->integer('management');
            $table->integer('driver_id');
            $table->integer('conductor_id');
            $table->string('amount')->nullable();


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
        Schema::dropIfExists('matatus');
    }
}
