<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';

    // Atributos de la tabla
    protected $fillable = [
        'titulo', 'isbn', 'anyo_publicacion', 'editorial','genero',
        'num_paginas','cant_total','cant_disponible','estanteria', 'poster'
    ];
    use HasFactory;
/* 
    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'id_libro');
    }
    public function prestamos()
    {
        return $this->hasMany(Prestamo::class, 'id_libro');
    } */
}
