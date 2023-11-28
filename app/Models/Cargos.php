<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargos extends Model
{
    use HasFactory;
    protected $fillable = ['id','codigo','nombre','activo',	'idUsuarioCreacion'	];
    public function users()
    {
        return $this->belongsTo(Users::class, 'idCargo');
    }
}
