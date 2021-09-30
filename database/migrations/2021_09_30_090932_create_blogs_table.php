<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('titre')->nullable();
            $table->string('titreEn')->nullable();
            $table->string('description')->nullable();
            $table->string('descriptionEn')->nullable();
            $table->bigInteger('createur')->nullable();
            $table->bigInteger('catId')->nullable();
            $table->enum('statut', ['valide', 'invalide'])->default('valide');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
