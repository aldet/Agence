<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VehiculeNullableField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicules', function (Blueprint $table) {
            $table->string('nom')->nullable(false)->change();
            $table->string('num_matriculation')->nullable(false)->change();
            $table->date('date_achat')->nullable(false)->change();
            $table->string('photo_vehicule')->nullable(false)->change();
            $table->string('carte_grise')->nullable(false)->change();
            
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
