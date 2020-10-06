<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('rut')->nullable();
            $table->string('nombres');
            $table->string('apellidos')->nullable();
            $table->date('fecha_nac');
            $table->string('telefono');
            $table->integer('id_estado_civil')->nullable();
            $table->integer('id_nacionalidad')->nullable();
            $table->text('direccion')->nullable();
            $table->string('nombre_menor')->nullable();
            $table->string('rut_menor')->nullable();
            $table->text('motivo_consulta')->nullable();
            $table->text('diagnostivo')->nullable();
            $table->text('plan_tratamiento')->nullable();
            $table->text('pronostico')->nullable();
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
        Schema::dropIfExists('pacientes');
    }
}
