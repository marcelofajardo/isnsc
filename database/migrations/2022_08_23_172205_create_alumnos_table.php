<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id(); //id_alumno int NOT NULL,
            $table->string('apellido');// apellido nvarchar(-1),
            $table->string('nombres');// nombres nvarchar(-1),
            $table->string('dni');// dni nvarchar(-1),
            $table->date('fecha_nac')->nullable();// fecha_nac date,
            $table->string('calle')->nullable();// calle nvarchar(-1),
            $table->string('numero')->nullable();// numero nvarchar(-1),
            $table->string('manzana')->nullable();// manzana nvarchar(-1),
            $table->string('casa')->nullable();// casa nvarchar(-1),
            $table->string('depto')->nullable();// depto nvarchar(-1),
            $table->string('barrio')->nullable();// barrio nvarchar(-1),
            $table->string('cp')->nullable();// cp nvarchar(-1),
            $table->string('ciudad')->nullable();// ciudad nvarchar(-1),
            $table->string('provincia')->nullable();// provincia nvarchar(-1),
            $table->string('celular')->nullable();// celular nvarchar(-1),
            $table->string('mail')->nullable();// mail nvarchar(-1),
            $table->string('obs')->nullable();// obs nvarchar(-1),
            $table->integer('baja')->nullable();// baja int,
            $table->string('genero',10)->nullable();// genero nchar(10),
            // PRIMARY KEY (id_alumno)



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
        Schema::dropIfExists('alumnos');
    }
}
