<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area_id')->comment('FK to areas')
                ->references('id')->on('areas')
                ->onDelete('no action');
            $table->foreignId('location_id')->comment('FK to locations')
                ->references('id')->on('locations')
                ->onDelete('no action');
            $table->foreignId('promotion_id')->default(0)->comment('FK to promotions')
                ->references('id')->on('promotions')
                ->onDelete('no action');
            $table->string('name')->comment('Tên tour');
            $table->string('code');
            $table->string('description', 2048)->comment('Mô tả');
            $table->string('departure_location')->comment('Địa điểm khởi hành');
            $table->string('destination')->comment('Đích đến');
            $table->string('itinerary')->comment('Hành trình');
            $table->integer('slot')->comment('Số chỗ');
            $table->string('other_day', 1024);
            $table->decimal('adult_price', 10, 2)->comment('Giá người lớn từ 12t trở lên');
            $table->decimal('youth_price', 10, 2)->comment('Giá trẻ em 5t đến 11t');
            $table->decimal('child_price', 10, 2)->comment('Giá trẻ nhỏ 2t đến 4t');
            $table->decimal('baby_price', 10, 2)->comment('Giá sơ sinh dưới 2t');
            $table->tinyInteger('display', 1)->default(1)->comment('1 là hiển thị');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('tour_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_id')->comment('FK to tours')
                ->references('id')->on('tours')
                ->onDelete('cascade');
            $table->integer('day');
            $table->longText('content');
            $table->string('note')->nullable();
            $table->timestamps();
        });

        Schema::create('tour_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_id')->comment('FK to tours')
                ->references('id')->on('tours')
                ->onDelete('cascade');
            $table->string('image_path', 2048);
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
        Schema::dropIfExists('tours');
        Schema::dropIfExists('other_days');
        Schema::dropIfExists('tour_plans');
        Schema::dropIfExists('tour_images');
    }
}
