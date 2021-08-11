<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('domestic')->default(1)->comment('1 là trong nuớc');
            $table->timestamps();
        });

        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area_id')->comment('FK to areas')
                ->references('id')->on('areas')
                ->onDelete('cascade');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('area_tour', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area_id')->comment('FK to areas')
                ->references('id')->on('areas')
                ->onDelete('cascade');
            $table->foreignId('tour_id')->comment('FK to tours')
                ->references('id')->on('tours')
                ->onDelete('cascade');
        });

        Schema::create('location_tour', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id')->comment('FK to locations')
                ->references('id')->on('locations')
                ->onDelete('cascade');
            $table->foreignId('tour_id')->comment('FK to tours')
                ->references('id')->on('tours')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas');
        Schema::dropIfExists('locations');
        Schema::dropIfExists('area_tour');
        Schema::dropIfExists('location_tour');
    }
}
