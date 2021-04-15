<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CartDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::dropIfExists('cart_detail');
        Schema::create('cart_detail', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->integer('idsp')->unsigned();;
            $table->integer('quantity')->unsigned();;
            $table->integer('idcus')->unsigned()->nullable();;
            $table->integer('iduser')->unsigned()->nullable();;
            $table->string('notes',100)->nullable();;
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
        Schema::dropIfExists('cart_detail');
    }
}
