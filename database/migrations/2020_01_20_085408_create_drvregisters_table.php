<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrvregistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drvregisters', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('email')->unique();
            $table->string('name');
            $table->integer('contact')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('area')->nullable();
            $table->string('licence')->nullable();
            $table->string('v_reg_no')->nullable();
            $table->string('image_path')->nullable()->default(1);
            $table->boolean('isavailable')->default(1);

            $table->timestamps();

         //   $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drvregisters');
    }
}
