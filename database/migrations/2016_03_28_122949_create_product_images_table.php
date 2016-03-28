<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('product_id')->nullable();
            $table->string('filename');
            $table->string('path');
            $table->integer('size')->nullable();
            $table->string('extension')->nullable();
            $table->string('mimetype')->nullable();
            $table->integer('user_id')->nullable();
            $table->boolean('is_active');
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
        Schema::drop('product_images');

    }
}
