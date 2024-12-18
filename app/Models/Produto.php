<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    /** @use HasFactory<\Database\Factories\ProdutoFactory> */
    use HasFactory;

    protected $fillable = [
        'cor_id',
        'nome',
        'descricao',
        'ativo',
    ];

    public function cor()
    {
        return $this->belongsTo(Cor::class);
    }
}
