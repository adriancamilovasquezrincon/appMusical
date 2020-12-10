<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantiles', function (Blueprint $table) {
            $table->bigIncrements('id_estudiantil');
            $table->string('nombres',45);
            $table->string('apellidos',45);
            $table->string('direccion',45);
            $table->integer('telefono');
            $table->string('sexo',9);
            $table->integer('edad');
            $table->string('email',45);
            $table->unsignedBigInteger('esi_maestro');
            $table->foreign('esi_maestro')->references('id_maestro')->on('maestros');
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
        Schema::dropIfExists('estudiantiles');
    }
}
