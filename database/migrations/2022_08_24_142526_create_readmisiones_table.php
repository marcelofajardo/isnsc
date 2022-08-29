<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadmisionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readmisiones', function (Blueprint $table) {
            $table->id();
            // id_reg int NOT NULL,
            $table->bigInteger('id_alumno')->nullable(false);// id_alumno int NOT NULL,
            $table->bigInteger('id_carrera')->nullable(false);// id_carrera int NOT NULL,
            $table->date('fecha');// fecha date NOT NULL,
            $table->string('baja',50);// baja nvarchar(50) NOT NULL,
            $table->string('obs');// obs nvarchar(-1),
            // PRIMARY KEY (id_reg)
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
        Schema::dropIfExists('readmisiones');
    }
}
