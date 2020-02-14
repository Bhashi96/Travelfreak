<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGudregistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gudregisters', function (Blueprint $table) {
            $table->bigIncrements('id');
           // $table->unsignedInteger('user_id');
            $table->string('email')->unique();
            $table->string('name');
            $table->integer('contact')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('licence')->nullable();
            $table->string('area')->nullable();
            $table->integer('price')->nullable();
            $table->string('image_path');
            $table->boolean('isavailable')->default(1);

            $table->timestamps();

          //  $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gudregisters');
    }
}
