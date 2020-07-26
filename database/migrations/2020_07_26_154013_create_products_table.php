<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string("name");
            $table->double("price");
            $table->text("description");
            $table->unsignedBigInteger("ID_Type");
            $table->foreign("ID_Type")->references("id")->on("types");
            $table->unsignedBigInteger("ID_Gender");
            $table->foreign("ID_Gender")->references("id")->on("genders");
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
        Schema::dropIfExists('products');
    }
}
