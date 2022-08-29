<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursarrendirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursarrendir', function (Blueprint $table) {
            $table->id();

            // id_cursar_rendir int NOT NULL,
            $table->string('nombre');// nombre nvarchar(50),
            // PRIMARY KEY (id_cursar_rendir)
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
        Schema::dropIfExists('cursarrendir');
    }
}
