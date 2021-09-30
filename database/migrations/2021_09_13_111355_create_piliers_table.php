<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piliers', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('titre_en');
            $table->text('contenu');
            $table->text('contenu_en');
            $table->string('image')->nullable();
            $table->enum('statut', ['actif', 'désactivé', 'archivé'])->default('désactivé');
            $table->bigInteger('createur');
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
        Schema::dropIfExists('piliers');
    }
}
