<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Escenari extends Model
{
    public function concerts(): HasMany
    {
        return $this->hasMany(Concert::class);
    }

    public function entradas(): HasManyThrough
    {
        return $this->hasManyThrough(Entrada::class,Concert::class);
    }

}
