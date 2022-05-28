<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('studentid')->nullable();
            $table->string('studentname')->nullable();
            $table->string('email')->uniqid();
            $table->string('phone')->nullable();
            $table->string('dateofbirth')->nullable();
            $table->string('password');
            $table->string('security_question')->nullable();
            $table->string('answer')->nullable();
            $table->string('picture')->nullable();
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('students');
    }
}
