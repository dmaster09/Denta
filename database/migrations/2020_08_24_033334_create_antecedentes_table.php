<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntecedentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes', function (Blueprint $table) {
            $table->id();
            $table->Integer('id_paciente');
            $table->boolean('padre_vida')->default(0);
            $table->string('enfermedad_padre')->nullable();
            $table->boolean('madre_vida')->default(0);
            $table->string('enfermedad_madre')->nullable();
            $table->boolean('sufre_enfermedad')->default(0);
            $table->string('cual_enfermedad')->nullable();
            $table->boolean('tratamiento_medico')->default(0);
            $table->string('cual_tratamiento')->nullable();
            $table->string('medicamento_consume')->nullable();
            $table->boolean('alergico_medicamento')->default(0);
            $table->string('cual_medicamento')->nullable();
            $table->boolean('anestesia')->default(0);
            $table->boolean('antibiotico')->default(0);
            $table->string('cual_antibiotico')->nullable();
            $table->string('problema_cardiaco')->nullable();
            $table->boolean('cicatrizacion')->default(0);
            $table->string('sangrado')->nullable();
            $table->boolean('diabetico')->default(0);
            $table->string('diabetico_controlado')->nullable();
            $table->boolean('hipertenso')->default(0);
            $table->string('hipertenso_controlado')->nullable();
            $table->boolean('aspirina')->default(0);
            $table->string('cual_aspirina')->nullable();
            $table->boolean('hepatitis')->default(0);
            $table->boolean('sifilis')->default(0);
            $table->boolean('gonorrea')->default(0);
            $table->boolean('hiv')->default(0);
            $table->boolean('asma')->default(0);
            $table->boolean('chaga')->default(0);
            $table->boolean('infectocontagiosa')->default(0);
            $table->boolean('fue_operado')->default(0);
            $table->string('cual_operacion')->nullable();
            $table->string('problema_respiratorio')->nullable();
            $table->boolean('fuma')->nullable();
            $table->boolean('embarazo')->nullable();
            $table->string('meses')->nullable();


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
        Schema::dropIfExists('antecedentes');
    }
}
