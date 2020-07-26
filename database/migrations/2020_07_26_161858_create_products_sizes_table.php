<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_sizes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("Stock");
            $table->unsignedBigInteger("ID_Product");
            $table->foreign("ID_Product")->references("id")->on("products");
            $table->unsignedBigInteger("ID_Size");
            $table->foreign("ID_Size")->references("id")->on("sizes");
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
        Schema::dropIfExists('products_sizes');
    }
}
