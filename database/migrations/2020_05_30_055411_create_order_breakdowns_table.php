<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderBreakdownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_breakdowns', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes('deleted_at');
            $table->unsignedBigInteger('order_details_id')->comment('order_detailsテーブルから');
            $table->foreign('order_details_id')->references('id')->on('order_detailss');
            $table->unsignedBigInteger('product_id')->comment('productsテーブルから');
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('number')->comment('個数');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_breakdowns');
    }
}
