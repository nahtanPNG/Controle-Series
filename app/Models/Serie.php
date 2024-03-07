<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];
    protected $with = ['season'];

    public function season() //método de relacionamento
    {
        return $this->hasMany(Season::class, 'series_id'); //Uma série vai ter um relacionamento de 1 para N com a tabela seasons
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('nome');
        });
    }
}
