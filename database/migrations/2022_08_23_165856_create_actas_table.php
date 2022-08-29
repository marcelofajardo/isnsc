<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actas', function (Blueprint $table) {
            $table->id(); //id_acta int NOT NULL,
            $table->string('libro'); // nvarchar(-1),
            $table->string('numero');// numero nvarchar(-1),
            $table->date('fecha')->nullable();// fecha date,
            $table->bigInteger('id_carrera')->nullable(false);// id_carrera int NOT NULL,
            $table->bigInteger('id_materia')->nullable(false);// id_materia int NOT NULL,
            $table->bigInteger('id_docente_p')->nullable(false);// id_docente_p int NOT NULL,
            $table->bigInteger('id_tipo_acta')->nullable(false);// id_tipo_acta int NOT NULL,
            $table->integer('id_docente_v1')->nullable(false);// id_docente_v1 int NOT NULL,
            $table->bigInteger('id_docente_v2')->nullable(false);// id_docente_v2 int NOT NULL,
            $table->string('obs')->nullable(); // obs nvarchar(-1),
            $table->string('cerrada',10); // cerrada nchar(10),
            $table->integer('periodo_lectivo')->nullable(false);// periodo_lectivo int NOT NULL,
            $table->string('docentes_alternos')->nullable();// docentes_alternos nvarchar(-1),
            $table->date('F_fin_periodo')->nullable();// F_fin_periodo date,
            $table->string('baja',10)->nullable();// baja nchar(10),
            $table->string('tipo_mesa')->nullable();// tipo_mesa nvarchar(50),
            $table->string('llamado');// llamado nvarchar(-1),
            // PRIMARY KEY (id_acta)

            $table->timestamps();

            //ADD FOREIGN KEY
            //$table->foreign('periodo_lectivo')->references('id')->on('dictado');

           /*  ALTER TABLE ISN.dbo.acta
            ADD FOREIGN KEY (periodo_lectivo) 
            REFERENCES dictado (id_dictado);
        
        
        ALTER TABLE ISN.dbo.acta
            ADD FOREIGN KEY (id_docente_p) 
            REFERENCES docente (id_docente);
        
        
        ALTER TABLE ISN.dbo.acta
            ADD FOREIGN KEY (id_materia) 
            REFERENCES materia (id_materia);
        
        
        ALTER TABLE ISN.dbo.acta
            ADD FOREIGN KEY (id_tipo_acta) 
            REFERENCES tipo_acta (id_tipo_acta); */


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actas');
    }
}
