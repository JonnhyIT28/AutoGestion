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
        Schema::create('gastos', function (Blueprint $table) {
            $table->id();
        $table->string('detalle', 255);
        $table->float('importe');
        $table->date('fecha');
        $table->unsignedBigInteger('categorias_id');
        $table->unsignedBigInteger('pagos_id');
        $table->tinyInteger('fijo');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos');
    }
};
