<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransportManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transport_managers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes('deleted_at');
            /**
            *string->textに変更
            **/
            $table->text('name');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transport_managers');
    }
}
