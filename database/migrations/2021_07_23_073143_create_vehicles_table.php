<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('tour_vehicle', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_id')->comment('FK to tours')
                ->references('id')->on('tours')
                ->onDelete('cascade');
            $table->foreignId('vehicle_id')->comment('FK to vehicles')
                ->references('id')->on('vehicles')
                ->onDelete('cascade');
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
        Schema::dropIfExists('vehicles');
        Schema::dropIfExists('tour_vehicle');
    }
}
