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
            $table->unsignedBigInteger('order_id')->comment('オーダーID');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->unsignedBigInteger('product_id')->comment('プロダクトID');
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedBigInteger('track_id')->comment('トラックID');
            $table->foreign('track_id')->references('id')->on('tracks');
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
