<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string("DNI")->nullable();
            $table->string("APELLIDO_PATERNO")->nullable();
            $table->string("APELLIDO_MATERNO")->nullable();
            $table->string("NOMBRES")->nullable();
            $table->string("EMAIL")->nullable();
            $table->string("CODIGO_CARRERA")->nullable();
            $table->string("TELEFONO")->nullable();
            $table->string("DIRECCION")->nullable();
            $table->string("PERIODO_INGRESO")->nullable();
            $table->string("SEMESTRE_INGRESO")->nullable();
            $table->string("PERIODO_EGRESO")->nullable();
            $table->string("SEMESTRE_EGRESO")->nullable();
            $table->string("ANIO_BACHILLER")->nullable();
            $table->string("PERIODO_TITULO")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
