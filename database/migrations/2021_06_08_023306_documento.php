<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Documento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento', function (Blueprint $table) {
            $table->increments('id_documento');
            $table->string("codigo",100)->nullable();
            $table->unsignedInteger('fk_modelo');
            $table->foreign('fk_modelo')->references('id_modelo')->on('modelo')->onDelete('cascade');
            $table->integer("nro_documento");
            $table->string("descripcion",400)->nullable();
            $table->date("f_registro");
            $table->string("ruta",300);
            $table->string("year",100);
            $table->unsignedInteger('fk_personal');
            $table->foreign('fk_personal')->references('id_personal')->on('personal')->onDelete('cascade');
            $table->unsignedInteger('fk_area');
            $table->foreign('fk_area')->references('id_area')->on('area')->onDelete('cascade');
            $table->unsignedInteger('fk_estado');
            $table->foreign('fk_estado')->references('id_estado')->on('estado')->onDelete('cascade');
            $table->string("observacion",500)->nullable();
            $table->integer("nro_adjunto");
            //$table->rememberToken();
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
         Schema::dropIfExists('documento');
    }
}
