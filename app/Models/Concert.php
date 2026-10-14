<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Concert extends Model
{
    //
    protected $fillable = [
        'nom',
        'artista_id',
        'data_hora',
        'durada_minuts',
        'tipus',
    ];
    protected $casts = [
        'nom' => 'string',
        'data_hora' => 'datetime',
        'durada_minuts' => 'integer',
        'tipus' => 'string',

    ];

    public function artista(): BelongsTo
    {
        return $this->belongsTo(Artista::class);
    }

}
