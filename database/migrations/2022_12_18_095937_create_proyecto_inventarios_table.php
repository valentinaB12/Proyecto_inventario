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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Email','50');
            $table->string('Nombres','25');
            $table->string('Apellidos','25');
            $table->string('Area','25');
            $table->string('Tipo_de_Computador','25')->nullable();
            $table->string('Marca','50');
            $table->string('Model','50');
            $table->string('Numero_serial','50');
            $table->string('SO','50');
            $table->string('RAM','50');
            $table->string('DD','50');
            $table->string('Marca_del_monitor','50')->nullable();
            $table->string('Serial_monitor','50')->nullable();
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
        Schema::dropIfExists('proyecto_inventarios');
    }
};
