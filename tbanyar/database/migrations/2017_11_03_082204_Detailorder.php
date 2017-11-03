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
            $table->integer('id_order')->unsigned();
            $table->integer('id_detailitem')->unsigned();
            $table->integer('banyak');
            $table->integer('subtotal');
            $table->timestamps();

            $table->foreign('id_order')->references('id')->on('Order')->onDelete('cascade');
            $table->foreign('id_detailitem')->references('id')->on('Detailitem')->onDelete('cascade');
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
