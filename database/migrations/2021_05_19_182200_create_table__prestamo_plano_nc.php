<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrestamoPlanoNc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos_plano_nc', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('id_area')->unsigned();
            $table->integer('id_maquina')->unsigned();
            $table->integer('id_empleado')->unsigned();
            $table->integer('id_pieza')->unsigned();
            $table->integer('ot');
            $table->boolean('devuelto')->nullable();
            $table->date('fechaTentDev')->nullable();
            $table->dateTime('fechaDev')->nullable();
            $table->string('obs',250);
            
            
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
        Schema::dropIfExists('prestamos_plano_nc');
    }
}
