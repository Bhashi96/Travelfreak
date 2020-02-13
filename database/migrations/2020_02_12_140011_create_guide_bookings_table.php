<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuideBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guide_bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tourist_id');
            $table->unsignedBigInteger('guide_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('nop');
            $table->string('district');
            $table->string('note')->nullable();
            $table->integer('book_flag');
            $table->integer('finiesd_flag');
            $table->timestamps();

            $table->index('tourist_id');
            $table->index('guide_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guide_bookings');
    }
}
