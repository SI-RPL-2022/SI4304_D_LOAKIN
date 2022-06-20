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
            $table->id();
            $table->string('no_order')->nullable();
            $table->unsignedBigInteger('id_user')->default('0');
            $table->index('id_user');
            $table->string('payment')->nullable();
            $table->string('tipeweight')->nullable();
            $table->string('weight')->nullable();
            $table->string('items')->nullable();
            $table->string('status')->default('Pilih Alamat');
            $table->unsignedBigInteger('id_driver')->default('0');
            $table->index('id_driver');
            $table->float('berat_asli')->default('0');
            $table->float('total_harga')->default('0');
            $table->string('item_asli')->default('0');
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
        Schema::dropIfExists('orders');
    }
}
