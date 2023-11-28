<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;

class Departamentos extends Model
{
    use HasFactory;
    protected $fillable = ['id','codigo',	'nombre',	'activo',	'idUsuarioCreacion']; //nombre de la tabla en BD

    public function users()
    {
        return $this->belongsTo(Users::class, 'idDepartamento');
    }
}
