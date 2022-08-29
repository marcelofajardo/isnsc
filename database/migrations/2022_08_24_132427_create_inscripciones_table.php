<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->bigInteger('id_alumno')->nullable(false);// id_alumno int NOT NULL,
            $table->bigInteger('id_materia')->nullable(false);// id_materia int NOT NULL,
            $table->bigInteger('id_carrera')->nullable(false);// id_carrera int NOT NULL,
            $table->bigInteger('id_acta')->nullable(false);// id_acta int NOT NULL,
            $table->date('fecha');// fecha date,
            $table->bigInteger('id_condicion')->nullable(false);// id_condicion nvarchar(-1),
            $table->primary(array('id_acta','id_alumno', 'id_carrera','id_materia'));// PRIMARY KEY (id_acta,id_alumno,id_carrera,id_materia)
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
        Schema::dropIfExists('inscripciones');
    }
}
