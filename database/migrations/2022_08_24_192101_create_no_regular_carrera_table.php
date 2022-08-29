<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoRegularCarreraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('no_regular_carrera', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_al');// id_al int NOT NULL,
            $table->bigInteger('id_carr');// id_carr int NOT NULL,
            $table->string('descrip');// descrip nvarchar(-1) NOT NULL
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
        Schema::dropIfExists('no_regular_carrera');
    }
}
