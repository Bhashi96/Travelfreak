<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEqpregistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eqpregisters', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('email')->unique();
            $table->string('name');
            $table->string('address')->nullable();
            $table->integer('contact')->nullable();
            $table->string('area')->nullable();
            $table->boolean('isavailable')->default(1);
            $table->string('image_path');
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
        Schema::dropIfExists('eqpregisters');
    }
}
