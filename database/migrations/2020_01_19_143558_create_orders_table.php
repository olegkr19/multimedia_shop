<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('number');
            $table->dateTime('date');
            $table->Integer('user_id')->unsigned();
            $table->Integer('payment_id')->unsigned();
            $table->boolean('paid');
            $table->timestamps();

            $table->foreign('user_id')
           ->references('id')
           ->on('users')
           ->onUpdate('cascade')
           ->onDelete('cascade');
           $table->foreign('payment_id')
          ->references('id')
          ->on('payment')
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
        Schema::dropIfExists('orders');
    }
}
