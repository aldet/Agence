<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAjoutForeignKeyCatMarqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicules', function (Blueprint $table) {
            $table->integer('id_categorie')->unsigned()->nullable();
            $table->integer('id_marque')->unsigned()->nullable();
            $table->foreign('id_categorie')->references('id')->on('categories');
            $table->foreign('id_marque')->references('id')->on('marques');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
