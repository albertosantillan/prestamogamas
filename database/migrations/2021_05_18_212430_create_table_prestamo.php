<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrestamo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('id_area')->unsigned();
            $table->integer('id_maquina')->unsigned();
            $table->integer('id_empleado')->unsigned();
            $table->integer('id_operacion')->unsigned();
            $table->integer('ot');
            $table->date('fechaTentDev');
            $table->dateTime('fechaDev')->nullable();
            $table->boolean('devuelto')->nullable();
            $table->boolean('devolucionOk')->nullable();
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
        Schema::dropIfExists('prestamos');
    }
}
