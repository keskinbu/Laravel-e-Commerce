<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('id_no');
            $table->string('email');
            $table->string('city');
            $table->string('district');
            $table->text('address');
            $table->integer('type');
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
        Schema::drop('customer_infos');
    }
}
