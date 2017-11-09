<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('suppliers_id')->unsigned();
            $table->date('tanggal');
            $table->integer('total');
            $table->boolean('status');
            $table->date('tanggaldatang')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('suppliers_id')->references('id')->on('Suppliers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Order');
    }
}
