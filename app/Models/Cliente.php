<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {
    public function vehiculos() {
        return $this->hasMany(Vehiculo::class);
    }
}
