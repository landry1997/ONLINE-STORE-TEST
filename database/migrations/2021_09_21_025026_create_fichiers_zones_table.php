<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichiersZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichiers_zones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fichiers_id')->unsigned()->nullable();
            $table->unsignedBigInteger('zones_id')->unsigned()->nullable();
            $table->integer('prix')->unsigned()->nullable();
            $table->timestamps();

            // $table->foreign('fichiers_id')->references('id')->on('fichiers')->onDelete('cascade');
            // $table->foreign('zones_id')->references('id')->on('zones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichiers_zones');
    }
}
