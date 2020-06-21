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
            $table->timestamps();
            $table->softDeletes('deleted_at');
            $table->unsignedBigInteger('user_id');//usersテーブルから
            $table->foreign('user_id')->references('id')->on('users'); //外部キー参照
            $table->unsignedBigInteger('deliveriy_id');//deliveriesテーブルから
            $table->foreign('deliveriy_id')->references('id')->on('deliveries'); //外部キー参照
            $table->unsignedBigInteger('destination_id');//destinationsテーブルから
            $table->foreign('destination_id')->references('id')->on('destinations'); //外部キー参照
            $table->date('delivery_date');
            $table->unsignedBigInteger('delivery_method_id');//delivery_methodsテーブルから
            $table->foreign('delivery_method_id')->references('id')->on('delivery_methods'); //外部キー参照
            $table->unsignedBigInteger('track_id');//tracksテーブルから
            $table->foreign('track_id')->references('id')->on('tracks'); //外部キー参照
            $table->unsignedBigInteger('status_id');//statusesテーブルから
            $table->foreign('status_id')->references('id')->on('statuses'); //外部キー参照
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
