<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    use HasFactory;

    protected $table = 'transacciones';

    // Atributos de la tabla
    protected $fillable = [
        'tipo', 'id_prestamo', 'id_reserva', 'id_multa', 'fecha_transaccion', 'id_usuario',
    ];

    /* public function prestamo()
    {
        return $this->belongsTo(Prestamo::class, 'id_prestamo');
    }
    
    public function reserva()
    {
        return $this->belongsTo(Reserva::class, 'id_reserva');
    }
    
    public function multa()
    {
        return $this->belongsTo(Multa::class, 'id_multa');
    } */
}
