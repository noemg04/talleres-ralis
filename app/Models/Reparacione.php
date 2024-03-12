<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reparacione
 *
 * @property $id
 * @property $vehiculo_id
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Vehiculo $vehiculo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reparacione extends Model
{
    
    static $rules = [
		'vehiculo_id' => 'required',
		'descripcion' => 'required|string',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['vehiculo_id','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vehiculo()
    {
        return $this->belongsTo(\App\Models\Vehiculo::class, 'vehiculo_id', 'id');
    }
    

}
