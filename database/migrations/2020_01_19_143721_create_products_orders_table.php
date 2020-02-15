<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_orders', function (Blueprint $table) {
            $table->Increments('id');
            $table->decimal('price', 6, 3);
            $table->integer('quantity');
            $table->decimal('discount', 6, 3);
            $table->decimal('total', 6, 3);
            $table->Integer('order_id')->unsigned();
            $table->Integer('product_id')->unsigned();
            $table->timestamps();

        $table->foreign('order_id')
       ->references('id')
       ->on('orders')
       ->onUpdate('cascade')
       ->onDelete('cascade');
       $table->foreign('product_id')
       ->references('id')
       ->on('products')
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
        Schema::dropIfExists('products_orders');
    }
}
