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
            $table->Increments('id');
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->decimal('discount', 8, 2);
            $table->string('image_url');
            $table->integer('brand_id')->unsigned();
            $table->integer('categories_id')->unsigned();
            $table->timestamps();

            $table->foreign('brand_id')
       ->references('id')
       ->on('brands')
       ->onUpdate('cascade')
       ->onDelete('cascade');
            $table->foreign('categories_id')
       ->references('id')
       ->on('categories')
       ->onUpdate('cascade')
       ->onDelete('cascade');
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
