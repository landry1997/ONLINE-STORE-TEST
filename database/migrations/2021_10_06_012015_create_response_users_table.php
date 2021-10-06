<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponseUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response_users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('createur')->nullable();
            $table->bigInteger('questionId')->nullable();
            $table->bigInteger('coursId')->nullable();
            $table->bigInteger('reponseId')->nullable();
            $table->bigInteger('userId')->nullable();
            $table->enum('statut', ['actif', 'desactive'])->default('actif')->nullable();
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
        Schema::dropIfExists('response_users');
    }
}
