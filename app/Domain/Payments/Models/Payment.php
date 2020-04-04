<?php

namespace Collex\Domain\Payments\Models;

use Collex\Domain\Deals\Models\Deal;
use Collex\Domain\Users\Models\User;
use Collex\Infrastructure\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use UsesUuid;

    /**
     * @param int $value
     * @return float
     */
    public function getAmountAttribute(int $value): float
    {
        return $value / 100;
    }

    /**
     * @param float $value
     */
    public function setAmountAttribute(float $value): void
    {
        $this->attributes['amount'] = $value * 100;
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function deal(): BelongsTo
    {
        return $this->belongsTo(Deal::class, 'deal_id', 'id');
    }
}