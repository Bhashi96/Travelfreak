<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTouregistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('touregisters', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('email')->unique();
            $table->string('name');
            $table->string('country')->nullable();
            $table->integer('contact')->nullable();
            $table->string('image_path');
           

            $table->timestamps();

           // $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('touregisters');
    }
}
