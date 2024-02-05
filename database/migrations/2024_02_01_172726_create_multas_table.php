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
        Schema::create('multas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario'); // Cambiado a unsignedBigInteger para usarlo como clave foránea
            $table->string('motivo');
            $table->integer('cantidad');
            $table->unsignedBigInteger('id_prestamo'); // Cambiado a unsignedBigInteger para usarlo como clave foránea
            $table->string('estado');

            $table->timestamps();

            // Definir claves foráneas
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_prestamo')->references('id')->on('prestamos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multas');
    }
};
