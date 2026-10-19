<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genere extends Model
{
    //

    protected $fillable = [
        'nom',
    ];

    public $timestamps = false;

    public function artistas(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Artista::class);
    }
}



