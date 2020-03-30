<?php

namespace Collex\Domain\Cards\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /**
     * @return HasMany
     */
    public function subCategories(): HasMany
    {
        return $this->hasMany(SubCategory::class);
    }
}