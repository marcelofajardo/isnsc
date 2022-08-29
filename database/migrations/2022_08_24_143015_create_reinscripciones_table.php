<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReinscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reinscripciones', function (Blueprint $table) {
            $table->id();
           
            $table->bigInteger('id_alumno')->nullable(false);// id_al int NOT NULL,
            $table->bigInteger('id_carrera')->nullable(false);// id_carr int NOT NULL,
            $table->date('fecha')->nullable(false);// fecha date NOT NULL,
            $table->bigInteger('id_condicion')->nullable(false);// id_cond int NOT NULL,
            $table->string('baja',10)->nullable(false);// baja nchar(10) NOT NULL,
            // PRIMARY KEY (id)
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
        Schema::dropIfExists('reinscripciones');
    }
}
