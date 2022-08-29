<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCondicionestadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condicionestados', function (Blueprint $table) {
            $table->bigInteger('id_condicion')->nullable(false);//id_condicion int NOT NULL,
            $table->bigInteger('id_estado_materia')->nullable(false);//id_estado_materia int NOT NULL,
            
            $table->primary(array('id_condicion','id_estado_materia')); //PRIMARY KEY (id_condicion,id_estado_materia)
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
        Schema::dropIfExists('condicionestados');
    }
}
