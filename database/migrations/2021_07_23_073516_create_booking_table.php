<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->comment('FK to users')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreignId('payment_id')->comment('FK to payments')
                ->references('id')->on('payments')
                ->onDelete('cascade');
            $table->string('code');
            $table->tinyInteger('status')->default(0)->comment('1 là đơn đã hoàn thành');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('booking_price', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->comment('FK to booking')
                ->references('id')->on('booking')
                ->onDelete('cascade');
            $table->foreignId('tour_id')->comment('FK to tours')
                ->references('id')->on('tours')
                ->onDelete('cascade');
            $table->integer('adult_slot')->nullable();
            $table->float('adult_price')->nullable()->comment('Giá nguời lớn trên 11 tuổi');
            $table->integer('youth_slot')->nullable();
            $table->float('youth_price')->nullable()->comment('Giá trẻ em 5 -> 11 tuổi');
            $table->integer('child_slot')->nullable();
            $table->float('child_price')->nullable()->comment('Giá trẻ nhỏ 2 -> 4 tuổi');
            $table->integer('baby_slot')->nullable();
            $table->float('baby_price')->nullable()->comment('Giá em bé duới 2 tuổi');
        });

        Schema::create('booking_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->comment('FK to booking')
                ->references('id')->on('booking')
                ->onDelete('cascade');
            $table->foreignId('tour_id')->comment('FK to tours')
                ->references('id')->on('tours')
                ->onDelete('cascade');
            $table->foreignId('other_day_id')->comment('FK to other_days')
                ->references('id')->on('other_days')
                ->onDelete('cascade');
            $table->foreignId('promotion_id')->comment('FK to promotions')
                ->references('id')->on('promotions')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
        Schema::dropIfExists('booking_price');
        Schema::dropIfExists('booking_details');
    }
}
