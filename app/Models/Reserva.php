<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';

    // Atributos de la tabla
    protected $fillable = [
    'id_usuario', 'id_libro', 'fecha_reserva', 'estado'
    ];

    /* public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function libro()
    {
        return $this->belongsTo(Libro::class, 'id_libro');
    }

    
    public function transaccion()
    {
        return $this->hasMany(Transaccion::class, 'id_reserva');
    } */
}
