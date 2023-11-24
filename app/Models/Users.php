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

    public function departamentos()
        {
            return $this->belongsTo(Departamentos::class);
        }

    public function cargos()
    {
        return $this->belongsTo(Departamentos::class);
    }
}
