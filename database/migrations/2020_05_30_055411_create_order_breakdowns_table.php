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
            $table->string('order_details_id');
            $table->string('product_id');
            $table->integer('number');
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
