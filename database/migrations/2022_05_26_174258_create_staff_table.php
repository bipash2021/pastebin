<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('staffid')->nullable();
            $table->string('staffname')->nullable();
            $table->string('email')->uniqid();
            $table->string('phone')->nullable();
            $table->string('dateofbirth')->nullable();
            $table->string('password');
            $table->string('security_question')->nullable();
            $table->string('answer')->nullable();
            $table->string('picture')->nullable();
            $table->boolean('status')->default(1)->comment('0 = inactive, 1 = active');
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
        Schema::dropIfExists('staff');
    }
}
