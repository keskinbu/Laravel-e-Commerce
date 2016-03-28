<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('main_product');
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_tag')->nullable();
            $table->text('description')->nullable();
            $table->integer('category')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('price1', 8, 2)->nullable();
            $table->decimal('price2', 8, 2)->nullable();
            $table->integer('discount')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('guarantee')->nullable();
            $table->string('slug')->nullable();
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
        Schema::drop('products');
    }
}
