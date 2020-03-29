<?php

namespace Collex\Domain\Users\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FeeType extends Model
{
    /**
     * @return HasMany
     */
    public function fees(): HasMany
    {
        return $this->hasMany(Fee::class);
    }
}