<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model {
    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function reparaciones() {
        return $this->hasMany(Reparacion::class);
    }
}
