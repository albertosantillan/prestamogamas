<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePieza extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piezas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_perforadora')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('SKU', 100);
            $table->string('codigo_pieza', 30);
            $table->string('descripcion_pieza', 150);
            $table->boolean('alta');
            $table->integer('revision');
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
        Schema::dropIfExists('piezas');
    }
}
