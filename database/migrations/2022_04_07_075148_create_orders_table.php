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
            $table->string('no_order');
            $table->unsignedBigInteger('id_user');
            $table->index('id_user')->default(null);
            $table->string('payment')->default(null);
            $table->string('tipeweight')->default(null);
            $table->string('weight')->default(null);
            $table->string('items')->default(null);
            $table->string('status')->default('On Prosess');
            $table->unsignedBigInteger('id_driver');
            $table->index('id_driver')->default('0');
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
