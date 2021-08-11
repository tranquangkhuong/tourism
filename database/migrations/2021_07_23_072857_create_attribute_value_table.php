<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('attribute_tour', function (Blueprint $table) {
            $table->id();
            $table->foreignId('attribute_id')->comment('FK to attributes')
                ->references('id')->on('attributes')
                ->onDelete('cascade');
            $table->foreignId('tour_id')->comment('FK to tours')
                ->references('id')->on('tours')
                ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('attribute_id')->comment('FK to attributes')
                ->references('id')->on('attributes')
                ->onDelete('cascade');
            $table->string('value');
            $table->timestamps();
        });

        Schema::create('tour_attribute_value', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_id')->comment('FK to tours')
                ->references('id')->on('tours')
                ->onDelete('cascade');
            $table->foreignId('attribute_id')->comment('FK to attributes')
                ->references('id')->on('attributes')
                ->onDelete('cascade');
            $table->foreignId('value_id')->comment('FK to values')
                ->references('id')->on('values')
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
        Schema::dropIfExists('attributes');
        Schema::dropIfExists('attribute_tour');
        Schema::dropIfExists('values');
        Schema::dropIfExists('tour_attribute_value');
    }
}
