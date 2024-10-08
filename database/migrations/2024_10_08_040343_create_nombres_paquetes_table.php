<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('nombres_paquetes', function (Blueprint $table) {
        $table->id('id_nombre_paquete');
        $table->string('nombre_paquete', 50);
        $table->integer('precio');
        $table->string('caracteristicas_paquete', 150);
        $table->string('velocidad_paquete', 30);
        $table->foreignId('fk_promocion')->constrained('promociones_paquetes', 'id_promocion');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nombre_paquetes');
    }
};
