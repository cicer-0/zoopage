<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Especie extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public function animals()
    {
        return $this->hasMany('App\Models\Animal');
    }
}