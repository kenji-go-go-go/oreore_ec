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
            $table->unsignedBigInteger('user_id')->comment('usersテーブルから');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('delivery_id')->comment('deliveriesテーブルから');
            $table->foreign('delivery_d')->references('id')->on('deliveries');
            $table->unsignedBigInteger('destination_id')->comment('destinationsテーブルから');
            $table->foreign('destination_id')->references('id')->on('destinations')
            $table->date('delivery_date')->comment('配達希望時間');
            $table->unsignedBigInteger('delivery_method_id')->comment('delivery_methodsテーブルから');
            $table->foreign('delivery_method_id')->references('id')->on('delivery_methods');
            $table->unsignedBigInteger('track_id')->comment('tracksテーブルから');
            $table->foreign('track_id')->references('id')->on('tracks');
            $table->unsignedBigInteger('status_id')->comment('statusesテーブルから');
            $table->foreign('status_id')->references('id')->on('statuses');
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
