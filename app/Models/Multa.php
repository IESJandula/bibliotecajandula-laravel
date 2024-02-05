<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multa extends Model
{
    use HasFactory;
    protected $table = 'multas';

    // Atributos de la tabla
    protected $fillable = [
     'id_usuario', 'motivo', 'cantidad', 'id_prestamo', 'estado'
    ];

/*     public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function prestamo()
    {
        return $this->belongsTo(Prestamo::class, 'id_prestamo');
    }

    
    public function transaccion()
    {
        return $this->hasMany(Transaccion::class, 'id_multa');
    } */

}
