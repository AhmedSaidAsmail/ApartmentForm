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
            $table->string('owner');
            $table->string('phone');
            $table->string('neighborhood');
            $table->string('street');
            $table->string('building_no');
            $table->string('area');
            $table->string('sort');
            $table->string('rooms_no');
            $table->string('floors_no');
            $table->string('parking_no');
            $table->string('lobby_area');
            $table->string('air_conditioning_type');
            $table->boolean('fire_system');
            $table->string('internal_services');
            $table->string('external_services');


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
