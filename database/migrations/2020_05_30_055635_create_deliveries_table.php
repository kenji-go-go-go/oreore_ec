<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes('deleted_at');
            /**
            *string->textに変更
            **/
            $table->text('company');
            $table->text('address');
            $table->string('tel');
            /**
            *string->textに変更
            **/
            $table->text('name');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deliveries');
    }
}
