<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOperacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operacion', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pieza')->unsigned();
            $table->integer('No_operacion');
            $table->string('descripcion_op', 200);
            $table->string('codigo',50);
            $table->integer('revision');
            $table->boolean('actualizado');
            $table->boolean('solid');
            $table->boolean('legible');
            $table->boolean('agrupado');
            $table->boolean('codBarras');
            $table->boolean('dobleCarta');
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
        Schema::dropIfExists('table_operacion');
    }
}
