<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reserva
 *
 * @property $id
 * @property $cliente_id
 * @property $servicio_id
 * @property $fecha_reserva
 * @property $hora_reserva
 * @property $comentarios
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Servicio $servicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserva extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['cliente_id', 'servicio_id', 'fecha_reserva', 'hora_reserva', 'comentarios'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'cliente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function servicio()
    {
        return $this->belongsTo(\App\Models\Servicio::class, 'servicio_id', 'id');
    }
    
}
