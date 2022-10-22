<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id_product');
            $table->integer('id_category');
            $table->string('nome');
            $table->longText('desc');
            $table->float('price');
            $table->float('weight');
            $table->string('dimension');
            $table->integer('quantity');
            $table->string('image')->nullable();
            $table->integer('viewed');
            $table->integer('status')->default(1);
            $table->float('discount')->nullable();
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
