<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Detailorder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Detailorder', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->integer('detailitem_id')->unsigned();
            $table->integer('banyak');
            $table->integer('subtotal');
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('Order')->onDelete('cascade');
            $table->foreign('detailitem_id')->references('id')->on('Detailitem')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Detailfaktur');
    }
}
