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
        Schema::table('domiciliarios', function (Blueprint $table) {
            $table->foreign(['id_Apartamento'], 'domiciliarios_ibfk_1')->references(['ID_Apartamento'])->on('apartamentos')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('domiciliarios', function (Blueprint $table) {
            $table->dropForeign('domiciliarios_ibfk_1');
        });
    }
};
