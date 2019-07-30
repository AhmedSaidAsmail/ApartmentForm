<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('apartment_id')->unsigned();
            $table->foreign('apartment_id')->references('id')->on('apartments')->onDlete('cascade');
            $table->string('main_gate')->nullable();
            $table->string('side_gates')->nullable();
            $table->string('main_lobby')->nullable();
            $table->string('main_lobby_2')->nullable();
            $table->string('reception')->nullable();
            $table->string('downfall')->nullable();
            $table->string('restaurant')->nullable();
            $table->string('cafe')->nullable();
            $table->string('out_garden')->nullable();
            $table->string('other')->nullable();
            $table->string('room_corridors_1')->nullable();
            $table->string('room_corridors_2')->nullable();
            $table->string('elevator')->nullable();
            $table->string('whole_room')->nullable();
            $table->string('room_insider')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('kitchen')->nullable();
            $table->string('reception_room')->nullable();
            $table->string('air_conditioning_type')->nullable();
            $table->string('fire_system')->nullable();
            $table->string('internal_services')->nullable();
            $table->string('external_services')->nullable();
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
        Schema::dropIfExists('images');
    }
}
