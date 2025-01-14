<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Monitor extends Model
{
    protected $guarded = [];

    public function resolusi(): BelongsTo
    {
        return $this->belongsTo(Resolusi::class);
    }

    public function pembelians(): HasMany
    {
        return $this->hasMany(Pembelian::class);
    }
}
