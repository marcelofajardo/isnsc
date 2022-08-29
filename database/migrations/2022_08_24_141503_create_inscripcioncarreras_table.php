<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcioncarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcioncarreras', function (Blueprint $table) {
            
            $table->bigInteger('id_alumno')->nullable(false);// id_alumno int NOT NULL,
            $table->bigInteger('id_carrera')->nullable(false);// id_carrera int NOT NULL,
            $table->bigInteger('id_condicion_carrera')->nullable(false);// id_condicion_carrera int NOT NULL,
            $table->date('fecha');// fecha date NOT NULL,
            $table->string('obs');// obs nvarchar(-1),
            $table->date('fecha_reins');// fecha_reins date,
            $table->primary(array('id_alumno', 'id_carrera'));// PRIMARY KEY (id_alumno,id_carrera)
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
        Schema::dropIfExists('inscripcioncarreras');
    }
}
