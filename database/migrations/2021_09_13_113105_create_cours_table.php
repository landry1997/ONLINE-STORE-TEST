<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('nom_en')->nullable();
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->string('description_en')->nullable();
            $table->enum('type', ['payant', 'non payant'])->default('payant')->nullable();
            $table->enum('statut', ['actif', 'désactivé', 'archivé', 'débuté', 'terminé'])->default('désactivé');
            $table->bigInteger('createur')->nullable();
            $table->bigInteger('participants')->nullable();
            $table->bigInteger('pilierId')->nullable();
            $table->timestamps();

            // $table->foreign('pilierId')->references('id')->on('piliers')->onDelete('cascade');
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
        Schema::dropIfExists('cours');
    }
}
