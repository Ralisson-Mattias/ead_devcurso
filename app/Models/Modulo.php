<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'curso_id',
        'status'
    ];

    public function aulas_exibir()
    {
        return $this->hasMany(Aula::class, 'modulos_id', 'id');
    }
}
