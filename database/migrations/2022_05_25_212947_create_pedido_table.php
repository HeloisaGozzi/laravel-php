<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->timestamps('data_pedido');
            $table->string('status');
            $table->string('itemPedido'); 
            $table->string('valorTotal'); 
            $table->integer('id_item_pedido')->unsigned();
            $table->foreign('id_item_pedido')->references('id')->on('item_pedido');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido');
    }
};
