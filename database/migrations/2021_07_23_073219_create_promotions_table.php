<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('promotion_tour', function (Blueprint $table) {
            $table->id();
            $table->foreignId('promotion_id')->comment('FK to promotions')
                ->references('id')->on('promotions')
                ->onDelete('cascade');
            $table->foreignId('tour_id')->comment('FK to tours')
                ->references('id')->on('tours')
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
        Schema::dropIfExists('promotions');
        Schema::dropIfExists('promotion_tour');
    }
}
