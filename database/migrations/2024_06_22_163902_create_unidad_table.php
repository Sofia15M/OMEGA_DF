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
        Schema::create('unidad', function (Blueprint $table) {
            $table->integer('ID_UNIDAD', true);
            $table->string('Nombre_Unidad');
            $table->string('Tel_Unidad');
            $table->string('Direccion_Unidad');
            $table->integer('Cantida_Apartamentos_Unidad');
            $table->binary('Foto_Unidad')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidad');
    }
};
