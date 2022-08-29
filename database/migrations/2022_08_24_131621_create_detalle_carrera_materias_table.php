<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleCarreraMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_carrera_materias', function (Blueprint $table) {
            $table->bigInteger('id_carrera')->nullable(false);// id_carrera int NOT NULL,
            $table->bigInteger('id_materia')->nullable(false);// id_materia int NOT NULL,
            $table->bigInteger('id_tipo_materia')->nullable(false);// id_tipo_materia int NOT NULL,
            $table->bigInteger('id_dictado')->nullable(false);// id_dictado int NOT NULL,
            $table->bigInteger('id_anio')->nullable(false);// id_anio int NOT NULL,
            $table->primary(array('id_carrera','id_materia'));// PRIMARY KEY (id_carrera,id_materia)
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
        Schema::dropIfExists('detalle_carrera_materias');
    }
}
