<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterActasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        /* Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        }); 
        $table->foreign('holding_id')->references('id')->on('holdings')->onDelete("NO ACTION");*/
        
                    
        Schema::table('actas', function (Blueprint $table) {
            $table->bigInteger('id_docente_p')->unsigned()->change();
            $table->bigInteger('id_tipo_acta')->unsigned()->change();
            $table->biginteger('periodo_lectivo')->unsigned()->change();
            $table->bigInteger('id_materia')->unsigned()->change();
            $table->foreign('periodo_lectivo')->references('id')->on('dictados');
            $table->foreign('id_docente_p')->references('id')->on('docentes');
            $table->foreign('id_materia')->references('id')->on('materias');
            $table->foreign('id_tipo_acta')->references('id')->on('tipoactas');
        });

//         ALTER TABLE ISN.dbo.acta
// 	ADD FOREIGN KEY (periodo_lectivo) 
// 	REFERENCES dictado (id_dictado);


// ALTER TABLE ISN.dbo.acta
// 	ADD FOREIGN KEY (id_docente_p) 
// 	REFERENCES docente (id_docente);

       /*  Schema::table('actas', function (Blueprint $table) {
            $table->foreignId('id_docente_p')->references('id')->on('docentes');
        });
 */

// ALTER TABLE ISN.dbo.acta
// 	ADD FOREIGN KEY (id_materia) 
// 	REFERENCES materia (id_materia);

       /*  Schema::table('actas', function (Blueprint $table) {
            $table->foreignId('id_materia')->references('id')->on('materias');
        }); */
// ALTER TABLE ISN.dbo.acta
// 	ADD FOREIGN KEY (id_tipo_acta) 
// 	REFERENCES tipo_acta (id_tipo_acta);

        /* Schema::table('actas', function (Blueprint $table) {
            $table->foreignId('id_tipo_acta')->references('id')->on('tipoactas');
        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /* Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        }); */

        Schema::table('actas', function (Blueprint $table) {
            $table->dropForeign(['periodo_lectivo']);
        });


        Schema::table('actas', function (Blueprint $table) {
            $table->dropForeign(['id_docente_p']);
        });


        Schema::table('actas', function (Blueprint $table) {
            $table->dropForeign(['id_materia']);
        });


        Schema::table('actas', function (Blueprint $table) {
            $table->dropForeign(['id_tipo_acta']);
        });

    }
}
