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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('NombreProyecto', 100);
            $table->string('UrlLogo', 255);
            $table->string('FuenteFondos', 255);
            $table->text('descripcion');
            $table->float('MontoPlanificado');
            $table->float('MontoPatrocinado');
            $table->float('MontoFondosPropios');
            $table->timestamp('FechaInicio')->nullable();
            $table->timestamp('FechaFin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
