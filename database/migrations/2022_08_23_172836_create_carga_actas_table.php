<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargaActasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carga_actas', function (Blueprint $table) {
            //$table->id();
            $table->bigInteger('id_alumno')->nullable(false);// id_alumno int NOT NULL,
            $table->bigInteger('id_materia')->nullable(false);// id_materia int NOT NULL,
            $table->bigInteger('id_carrera')->nullable(false);// id_carrera int NOT NULL,
            $table->bigInteger('id_acta')->nullable(false);// id_acta int NOT NULL,
            $table->date('fecha')->nullable(false);// fecha date NOT NULL,
            $table->float('nota')->nullable(false);// nota float(53) NOT NULL,
            $table->bigInteger('id_estado_materia')->nullable(false);// id_estado_materia int NOT NULL,
            $table->date('fecha_original')->nullable();// fecha_original date,
            $table->bigInteger('id_est_mat_original')->nullable(); // id_est_mat_original int,
            $table->primary(array('id_acta','id_alumno','id_carrera','id_materia'));// PRIMARY KEY (id_acta,id_alumno,id_carrera,id_materia)


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
        Schema::dropIfExists('carga_actas');
    }
}
