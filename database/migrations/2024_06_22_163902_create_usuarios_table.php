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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('ID_user', true);
            $table->string('Gmail_User', 100)->nullable();
            $table->string('Contrasena_User', 100);
            $table->integer('ID_ROL')->nullable()->index('id_rol');
            $table->integer('ID_UNIDAD')->nullable()->index('id_unidad');
            $table->binary('Foto_User')->nullable();
            $table->string('nombreCompleto')->nullable();
            $table->string('token_password', 200)->nullable();
            $table->string('expired_session', 40)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
