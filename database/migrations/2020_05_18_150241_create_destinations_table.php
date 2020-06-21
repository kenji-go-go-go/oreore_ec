<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes('deleted_at');
            /**
            *外部キー制約が必要になる？
            **/
            $table->unsignedBigInteger('user_id');//usersテーブルから
            $table->foreign('user_id')->references('id')->on('users'); //外部キー参照
            $table->string('name');
            $table->string('tel');
            $table->string('zipcode');
            $table->string('prefecture');
            $table->string('city');
            /**
            *string->textに変更
            **/
            $table->text('address1');
            $table->text('address2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinations');
    }
}
