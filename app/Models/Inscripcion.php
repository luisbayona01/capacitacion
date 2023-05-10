<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inscripcione
 *
 * @property $id
 * @property $capacitacion_id
 * @property $usuario_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Capacitacion $capacitacion
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inscripcion extends Model
{
     protected $table = 'inscripciones';
protected $primaryKey = 'id';
   
    protected $fillable = ['capacitacion_id','usuario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function capacitaciones()
    {
        return $this->hasOne('App\Models\Capacitacion', 'id', 'capacitacion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'usuario_id');
    }
    

}
