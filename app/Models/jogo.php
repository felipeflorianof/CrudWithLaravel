<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jogo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'categoria',
        'lancamento',
        'valor',
    ];
            
}
