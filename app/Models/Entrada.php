<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $fillable = ['user_id', 'concert_id', 'preu_pagat'];
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($entrada) {
            $entrada->codi_entrada = 'SONA-' . strtoupper(substr(md5(uniqid()), 0, 8));
        });
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function concert(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Concert::class);
    }

}
