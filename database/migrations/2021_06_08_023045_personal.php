<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->increments('id_personal');
            $table->unsignedInteger('fk_dato');
            $table->foreign('fk_dato')->references('id_dato')->on('dato')->onDelete('cascade');
            $table->unsignedInteger('fk_usuario');
            $table->foreign('fk_usuario')->references('id_usuario')->on('usuario')->onDelete('cascade');
            $table->unsignedInteger('fk_cargo');
            $table->foreign('fk_cargo')->references('id_cargo')->on('cargo')->onDelete('cascade');
            $table->unsignedInteger('fk_area');
            $table->foreign('fk_area')->references('id_area')->on('area')->onDelete('cascade');
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
         Schema::dropIfExists('personal');
    }
}
