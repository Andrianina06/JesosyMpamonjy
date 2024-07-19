<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementMembreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenement_personne', function (Blueprint $table) {
            $table->foreignId('evenement_id')->constrained()->onDelete('cascade');
            $table->foreignId('personne_id')->constrained()->onDelete('cascade');
            $table->primary(['evenement_id', 'personne_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evenement_membre');
    }
}
