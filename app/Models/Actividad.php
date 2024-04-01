<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table="actividades";
    protected $fillable = ['dia', 'horario'];

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }
}
