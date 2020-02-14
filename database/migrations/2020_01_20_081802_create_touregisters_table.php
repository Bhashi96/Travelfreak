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
            $table->bigIncrements('id');
           // $table->unsignedInteger('user_id');
            $table->string('email')->unique();
            $table->string('name');
            $table->string('country')->nullable();
<<<<<<< HEAD
            $table->integer('cotact')->nullable();
            $table->string('image_path');
=======
            $table->integer('contact')->nullable();
>>>>>>> 3bd63f540e82821516e74ff92b9ea211d83c1b4e
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
