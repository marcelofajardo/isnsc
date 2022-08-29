<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            // id_materia int NOT NULL,
            $table->string('nombre');// nombre nvarchar(-1),
            $table->string('num_materia',50);// num_materia nvarchar(50),
            $table->integer('id_carrera');// id_carrera int,
            // PRIMARY KEY (id_materia)
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
        Schema::dropIfExists('materias');
    }
}
