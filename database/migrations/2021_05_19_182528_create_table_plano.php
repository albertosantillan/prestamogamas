<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePlano extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plano', function (Blueprint $table) {
            $table->id();
            $table->integer('id_operacion')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('No_hoja',5);
            $table->integer('ptosInsp');
            $table->string('comparacion',25);
            $table->boolean('cumple');
            $table->date('fechaAlta');


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
        Schema::dropIfExists('table_plano');
    }
}
