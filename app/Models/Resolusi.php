<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Resolusi extends Model
{
    protected $guarded = [];

    public function monitors(): HasMany
    {
        return $this->hasMany(Monitor::class);
    }
}
