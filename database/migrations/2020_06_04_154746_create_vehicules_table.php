<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->nullable();
            $table->string('num_matriculation')->nullable();
            $table->string('km_compteur')->nullable();
            $table->date('date_achat')->nullable();
            $table->string('photo_vehicule')->nullable();
            $table->string('carte_grise')->nullable();
            $table->bigInteger('agence_id')->unsigned();
            $table->foreign('agence_id')->refeences('id')->on('agences');
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
        Schema::dropIfExists('vehicules');
    }
}
