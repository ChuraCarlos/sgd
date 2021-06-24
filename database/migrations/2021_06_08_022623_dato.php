<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dato', function (Blueprint $table) {
            $table->increments('id_dato');
            $table->string('nombre',100);
            $table->string('paterno',100);
            $table->string('materno',100);
            $table->unsignedInteger('fk_tipo_documento');
            $table->foreign('fk_tipo_documento')->references('id_tipo_documento')->on('tipo_documento')->onDelete('cascade');
            $table->string('documento',50);
            $table->string('direccion',200);
            $table->string('celular',20);
            $table->string('mail',150);
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
         Schema::dropIfExists('dato');
    }
}
