<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cor extends Model
{
    /** @use HasFactory<\Database\Factories\CorFactory> */
    use HasFactory;

    protected $table = 'cores';

    protected $fillable = [
        'nome',
    ];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
