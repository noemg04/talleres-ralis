<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model {
    public function vehiculo() {
        return $this->belongsTo(Vehiculo::class);
    }
}