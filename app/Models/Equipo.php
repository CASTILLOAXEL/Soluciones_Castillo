<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = ['marca_id', 'modelo', 'tipo'];

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function servicios()
    {
        return $this->hasMany(Servicio::class);
    }
}
