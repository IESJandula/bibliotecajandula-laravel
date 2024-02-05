<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    protected $table = 'prestamos';

    // Atributos de la tabla
    protected $fillable = [
        'id_usuario', 'id_libro', 'fecha_prestamo', 'estado', 'devuelto'
    ];

    /* public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function libro()
    {
        return $this->belongsTo(Libro::class, 'id_libro');
    }

    public function multas()
    {
        return $this->hasMany(Multa::class, 'id_prestamo');
    }

    public function transaccion()
    {
        return $this->hasMany(Transaccion::class, 'id_prestamo');
    } */
}
