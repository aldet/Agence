<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marque', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marque',50);
            $table->integer('vehicule_id')->unsigned()->nullable();
            $table->foreign('vehicule_id')->references('id')->on('vehicules');
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
        Schema::dropIfExists('marque');
    }
}
