<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteretsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interets', function (Blueprint $table) {
            $table->id();
            $table->text('bio')->nullable();
            $table->enum('genre', ['masculin', 'feminin','default']);
            $table->string('pays');
            $table->string('region');
            $table->string('ville');
            $table->string('activite');
            $table->string('secteur');
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('siteweb')->nullable();
            $table->bigInteger('createur')->nullable();
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
        Schema::dropIfExists('interets');
    }
}
