<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->integer('horasTrabajadas');
            $table->integer('precioPorHora');
            $table->unsignedBigInteger('trabajador_id');
            $table->timestamps();
        });
        Schema::table('empleados', function($table) {
            $table->foreign('trabajador_id')->references('id')->on('trabajadors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};