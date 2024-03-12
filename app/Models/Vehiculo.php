<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 *
 * @property $id
 * @property $cliente_id
 * @property $marca
 * @property $modelo
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Reparacione[] $reparaciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehiculo extends Model
{
    
    static $rules = [
		'cliente_id' => 'required',
		'marca' => 'required|string',
		'modelo' => 'required|string',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente_id','marca','modelo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'cliente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reparaciones()
    {
        return $this->hasMany(\App\Models\Reparacione::class, 'id', 'vehiculo_id');
    }
    

}
