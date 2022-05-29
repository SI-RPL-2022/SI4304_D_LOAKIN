<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_shops', function (Blueprint $table) {
            $table->id();
            $table->string('no_order');
            $table->unsignedBigInteger('id_user');
            $table->index('id_user');
            $table->string('buktibayar')->default('bukti.jpg');
            $table->integer('total');
            $table->string('status')->default('On Prosess');
            $table->unsignedBigInteger('id_produk');
            $table->index('id_produk');
            $table->integer('jumlah');
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
        Schema::dropIfExists('order_shops');
    }
}
