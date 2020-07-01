<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrats', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_depart');
            $table->date('date_retour_prevu');
            $table->date('date_retour');
            $table->string('montant_journalier');
            $table->string('km_depart');
            $table->string('montant_acompte');
            $table->integer('id_agence')->unsigned()->nullable();
            $table->integer('id_client')->unsigned()->nullable();
            $table->integer('id_vehicule')->unsigned()->nullable();
            $table->foreign('id_agence')->references('id')->on('agences');
            $table->foreign('id_client')->references('id')->on('clients');
            $table->foreign('id_vehicule')->references('id')->on('vehicules');
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
        Schema::dropIfExists('contrats');
    }
}
