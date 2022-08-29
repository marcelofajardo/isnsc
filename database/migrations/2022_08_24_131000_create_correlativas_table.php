<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrelativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correlativas', function (Blueprint $table) {
            $table->bigInteger('id_carrera')->nullable(false);// id_carrera int NOT NULL,
            $table->bigInteger('id_materia')->nullable(false);// id_materia int NOT NULL,
            $table->bigInteger('id_mat_corr')->nullable(false);// id_mat_corr int NOT NULL,
            $table->bigInteger('id_condicion')->nullable(false);// id_condicion int NOT NULL,
            $table->bigInteger('id_cursar_rendir')->nullable(false);// id_cursar_rendir int NOT NULL,
            $table->primary(['id_carrera',
                             'id_cursar_rendir',
                             'id_mat_corr',
                             'id_materia'], 
                             'primary_correlativas'); // PRIMARY KEY (id_carrera,id_cursar_rendir,id_mat_corr,id_materia)
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
        Schema::dropIfExists('correlativas');
    }
}
