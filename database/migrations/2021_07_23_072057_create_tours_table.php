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
            $table->string('title')->comment('Tiêu đề');
            $table->string('description')->comment('Mô tả');
            $table->string('departure_location')->comment('Địa điểm khởi hành');
            $table->string('destination')->comment('Đích đến');
            $table->string('journey')->comment('Hành trình');
            $table->tinyInteger('display')->default(1)->comment('1 là hiển thị');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('tours_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_id')->comment('FK to tours')
                ->references('id')->on('tours')
                ->onDelete('cascade');
            $table->string('code');
            $table->date('departure_date')->comment('Ngày khởi hành');
            $table->string('departure_time')->nullable()->comment('Thời gian khởi hành');
            $table->integer('slot')->comment('Số chỗ');
            $table->float('adult_price')->comment('Giá người lớn');
            $table->float('youth_price')->comment('Giá trẻ em');
            $table->float('child_price')->comment('Giá trẻ nhỏ');
            $table->float('infant_price')->comment('Giá sơ sinh');
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
            $table->string('image');
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
        Schema::dropIfExists('tours_details');
        Schema::dropIfExists('tour_plans');
        Schema::dropIfExists('tour_images');
    }
}
