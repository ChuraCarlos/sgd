<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bandeja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bandeja', function (Blueprint $table) {
            $table->increments('id_bandeja');
            $table->unsignedInteger('fk_documento');
            $table->foreign('fk_documento')->references('id_documento')->on('documento')->onDelete('cascade');
            $table->unsignedInteger('fk_estado');
            $table->foreign('fk_estado')->references('id_estado')->on('estado')->onDelete('cascade');
            $table->unsignedInteger('receptor_area');
            $table->foreign('receptor_area')->references('id_area')->on('area')->onDelete('cascade');
            $table->boolean("aceptado");
            $table->date("f_recepcion");
            //$table->rememberToken();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('bandeja');
    }
}
