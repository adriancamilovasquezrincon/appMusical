<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstrumentalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrumentales', function (Blueprint $table) {
            $table->bigIncrements('id_instrumental');
            $table->string('nombres',45);
            $table->string('apellidos',45);
            $table->string('direccion',45);
            $table->integer('telefono');
            $table->string('sexo',9);
            $table->integer('edad');
            $table->string('email',45);
            $table->unsignedBigInteger('profesorI');
            $table->unsignedBigInteger('estudianteI');
            $table->foreign('profesorI')->references('id_profesor')->on('profesores');
            $table->foreign('estudianteI')->references('id_estudiantil')->on('estudiantiles');
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
        Schema::dropIfExists('instrumentales');
    }
}
