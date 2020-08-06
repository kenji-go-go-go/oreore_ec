<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //ECサイト管理
        Schema::create('site_masters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes('deleted_at');
            $table->unsignedBigInteger('order_id')->comment('オーダーID');
            $table->foreign('order_id')->references('id')->on('orders');
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
        Schema::dropIfExists('site_masters');
    }
}
