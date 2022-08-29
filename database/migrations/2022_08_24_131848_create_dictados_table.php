<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDictadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictados', function (Blueprint $table) {
            $table->id();
            // id_dictado int NOT NULL,
            $table->string('nombre',50);// nombre nvarchar(50),
            // PRIMARY KEY (id_dictado)
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
        Schema::dropIfExists('dictados');
    }
}
