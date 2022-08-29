<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCondicioncarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condicioncarreras', function (Blueprint $table) {
            $table->id();

            // id_condicion_carrera int NOT NULL,
            $table->string('nombre',50);// nombre nvarchar(50),
            // PRIMARY KEY (id_condicion_carrera)
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
        Schema::dropIfExists('condicioncarreras');
    }
}
