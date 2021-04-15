<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('product', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('name',100);
            $table->integer('price')->unsigned();
            $table->double('weight');
            $table->integer('sales')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->string('date',30)->nullable();
            $table->string('content',100)->nullable();
            $table->string('images',100)->nullable();
            $table->integer('idlist')->unsigned()->nullable();
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
        Schema::dropIfExists('product');
    }
}
