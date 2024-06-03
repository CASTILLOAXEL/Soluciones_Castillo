<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'especialidad'];

    public function servicios()
    {
        return $this->hasMany(Servicio::class);
    }
}
