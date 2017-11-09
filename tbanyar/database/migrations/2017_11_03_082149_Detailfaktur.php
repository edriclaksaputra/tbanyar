<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Detailfaktur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Detailfaktur', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('faktur_id')->unsigned();
            $table->integer('items_id')->unsigned();
            $table->integer('subtotal');
            $table->integer('banyak');
            $table->timestamps();

            $table->foreign('faktur_id')->references('id')->on('Faktur')->onDelete('cascade');
            $table->foreign('items_id')->references('id')->on('Items')->onDelete('cascade');
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
