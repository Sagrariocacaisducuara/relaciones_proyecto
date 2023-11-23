<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;
    protected $table = 'servicios';
   
    protected $fillable = [
        'id_servicio',
        'nombre_servicio',
        'descripcion_servicio',
        'precio',
        'nro_reserva',
    ];

    public function reservas()
    {
        return $this->belongsTo(Reservas::class, 'id_servicio', 'id');
    }
}
