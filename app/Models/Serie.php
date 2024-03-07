<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];

    public function season() //método de relacionamento
    {
        return $this->hasMany(Season::class); //Uma série vai ter um relacionamento de 1 para N com a tabela seasons
    }
}
