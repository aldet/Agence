<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjoutKeyVehiculeTableClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::table('clients', function (Blueprint $table) {
        $table->integer('vehicule_id')->unsigned()->nullable();
        $table->foreign('vehicule_id')->references('id')->on('vehicules');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
