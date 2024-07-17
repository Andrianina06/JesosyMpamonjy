<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->integer('exemple_evenement_id')->index(); 
            $table->date('date_debut');
            $table->date('date_fin');
            $table->longText('programme');
            $table->integer('equipe_musicien_id')->index();
            $table->integer('equipe_cuisine_id')->index();
            $table->integer('equipe_videaste_id')->index;
            $table->integer('personne_resp_id')->index();
            $table->longText('approvisionnement');
            $table->integer('duree_du_trajet');
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
        Schema::dropIfExists('evenements');
    }
}
