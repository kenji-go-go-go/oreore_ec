<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransportManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transport_managements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes('deleted_at');
            $table->unsignedBigInteger('order_id');//ordersテーブルから
            $table->foreign('order_id')->references('id')->on('orders'); //外部キー参照
            $table->unsignedBigInteger('product_id');//productsテーブルから
            $table->foreign('product_id')->references('id')->on('products'); //外部キー参照
            $table->unsignedBigInteger('track_id');//ordersテーブルから
            $table->foreign('track_id')->references('id')->on('tracks'); //外部キー参照
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transport_managements');
    }
}
