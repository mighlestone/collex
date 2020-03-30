<?php

namespace Collex\Domain\Users\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fee extends Model
{
    /**
     * @param int $value
     * @return float
     */
    public function getPercentageAttribute(int $value): float
    {
        return $value / 100;
    }

    /**
     * @param float $value
     */
    public function setPercentageAttribute(float $value): void
    {
        $this->attributes['percentage'] = $value * 100;
    }

    /**
     * @return BelongsTo
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(FeeType::class, 'fee_type_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}