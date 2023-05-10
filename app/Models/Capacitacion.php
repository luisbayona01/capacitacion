<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
   protected $table = 'capacitaciones';
protected $primaryKey = 'id';
   protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'hora_inicio',
        'hora_fin',
        'cupos_disponibles',
        'id_administrador',
    ];

    public function administrador()
    {
        return $this->belongsTo(Usuario::class, 'id_administrador');
    }

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'id_capacitacion');
    }

}
