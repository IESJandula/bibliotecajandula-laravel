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
        Schema::create('transacciones', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->unsignedBigInteger('id_usuario')->nullable(); // Cambiado a unsignedBigInteger para usarlo como clave foránea
            $table->unsignedBigInteger('id_reserva')->nullable(); // Cambiado a unsignedBigInteger para usarlo como clave foránea
            $table->unsignedBigInteger('id_multa')->nullable(); // Cambiado a unsignedBigInteger para usarlo como clave foránea
            $table->unsignedBigInteger('id_prestamo')->nullable(); // Cambiado a unsignedBigInteger para usarlo como clave foránea
            $table->timestamp('fecha_transaccion')->nullable();
            $table->timestamps();

            // Definir claves foráneas
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_reserva')->references('id')->on('reservas');
            $table->foreign('id_multa')->references('id')->on('multas');
            $table->foreign('id_prestamo')->references('id')->on('prestamos');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacciones');
    }
};
