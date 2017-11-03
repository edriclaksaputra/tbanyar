<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Detailitem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Detailitem', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_supplier')->unsigned();
            $table->integer('id_item')->unsigned();
            $table->integer('hargabeli');
            $table->timestamps();

            $table->foreign('id_supplier')->references('id')->on('Suppliers')->onDelete('cascade');
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
        Schema::dropIfExists('Detailitem');
    }
}
