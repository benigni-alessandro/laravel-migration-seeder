<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('travel_tips', 50);
            $table->string('destination', 20);
            $table->string('description', 1000);
            $table->integer('days')->default(1);
            $table->tinyInteger('persons')->default(1);
            $table->date('date_in');
            $table->date('date_out');
            $table->integer('price');
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
        Schema::dropIfExists('travel');
    }
}
