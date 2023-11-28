<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $fillable = ['usuario',
                            'primerNombre',
                            'segundoNombre',
                            'primerApellido',
                            'segundoApellido',
                            'idDepartamento',
                            'idCargo'
                        ];

    public function cargos()
    {
        return $this->belongsTo(Cargos::class, 'id');
    }
    public function departamentos()
    {
        return $this->belongsTo(Departamentos::class, 'id');
    }
}
