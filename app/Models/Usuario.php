<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = ['nombre', 'numero_estudiante', 'curso', 'fecha_inscripcion'];

    /* public function reservas()
    {
        return $this->hasMany(Reserva::class, 'id_usuario');
    }

    public function multas()
    {
        return $this->hasMany(Multas::class, 'id_usuario');
    }

    public function prestamos()
    {
        return $this->hasMany(Prestamo::class, 'id_usuario');
    } */
}
