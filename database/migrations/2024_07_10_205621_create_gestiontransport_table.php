<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestiontransportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestiontransport', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evenement_id')->constrained()->cascadeOnDelete();
            $table->foreignId('vehicule_id')->constrained()->cascadeOnDelete();
            $table->bigInteger('frais');
            $table->integer('heure_depart');
            $table->date('date_depart');
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
        Schema::dropIfExists('gestiontransport');
    }
}
