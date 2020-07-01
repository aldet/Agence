<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_tarification',50);
            $table->string('montant');
            $table->integer('id_agence')->unsigned()->nullable();
            $table->integer('id_categorie')->unsigned()->nullable();
            $table->foreign('id_agence')->references('id')->on('agences');
            $table->foreign('id_categorie')->references('id')->on('categories');
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
        Schema::dropIfExists('tarifications');
    }
}
