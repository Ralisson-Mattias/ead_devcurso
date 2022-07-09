<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'imagem',
        'descricao',
        'requisitos',
        'video',
        'valor',
        'tempo_expiracao',
        'professor_id',
        'status'
    ];
}
