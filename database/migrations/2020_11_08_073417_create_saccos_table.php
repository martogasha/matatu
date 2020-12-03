<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaccosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saccos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('from');
            $table->string('to');
            $table->string('s1');
            $table->string('s2');
            $table->string('s3');
            $table->string('s4');
            $table->string('s5');
            $table->string('s6')->nullable();
            $table->string('s7')->nullable();
            $table->string('s8')->nullable();
            $table->string('s9')->nullable();
            $table->string('s10')->nullable();
            $table->string('s11')->nullable();
            $table->string('s12')->nullable();
            $table->string('s13')->nullable();
            $table->string('s14')->nullable();
            $table->string('s15')->nullable();




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
        Schema::dropIfExists('saccos');
    }
}
