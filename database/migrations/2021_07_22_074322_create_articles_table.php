<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->comment('FK to users')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->string('title');
            $table->string('image_path', 2048)->nullable();
            $table->longText('content');
            $table->tinyInteger('display', 1)->default(1)->comment('1 là hiển thị');
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
        Schema::dropIfExists('articles');
    }
}
