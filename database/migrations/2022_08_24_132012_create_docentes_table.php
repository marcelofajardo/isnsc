<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id(); // id_docente int NOT NULL,
            $table->string('apellido');// apellido nvarchar(-1),
            $table->string('nombres');// nombres nvarchar(-1),
            $table->string('dni');// dni nvarchar(-1),
            $table->string('titulo');// titulo nvarchar(-1),
            $table->date('fecha_ingreso')->nullable();// fecha_ingreso date,
            $table->string('celular');// celular nvarchar(-1),
            $table->string('mail');// mail nvarchar(-1),
            $table->string('obs');// obs nvarchar(-1),
            // PRIMARY KEY (id_docente)
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
        Schema::dropIfExists('docentes');
    }
}
