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
            $table->integer('id_faktur')->unsigned();
            $table->integer('id_item')->unsigned();
            $table->integer('subtotal');
            $table->integer('banyak');
            $table->timestamps();

            $table->foreign('id_faktur')->references('id')->on('Faktur')->onDelete('cascade');
            $table->foreign('id_item')->references('id')->on('Items')->onDelete('cascade');
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
