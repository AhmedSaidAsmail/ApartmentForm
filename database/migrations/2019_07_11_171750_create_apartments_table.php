<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('owner')->nullable();
            $table->string('phone')->nullable();
            $table->integer('neighborhood_id')->unsigned();
            $table->foreign('neighborhood_id')->references('id')->on('neighborhoods')->onDelete('cascade');
            $table->string('street');
            $table->string('building_no')->nullable();
            $table->string('area')->nullable();
            $table->string('sort')->nullable();
            $table->string('rooms_no');
            $table->string('floors_no');
            $table->string('parking_no');
            $table->string('lobby_area')->nullable();
            $table->string('air_conditioning_type')->nullable();
            $table->boolean('fire_system')->nullable();
//            $table->string('internal_services')->nullable();
//            $table->string('external_services')->nullable();


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
        Schema::dropIfExists('apartments');
    }
}
