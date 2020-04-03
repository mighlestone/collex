<?php

namespace Collex\Domain\UserFunctions\Models;

use Collex\Domain\Cards\Models\Card;
use Collex\Domain\Users\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ask extends Model
{
    /**
     * @param int $value
     * @return float
     */
    public function getPriceAttribute(int $value): float
    {
        return $value / 100;
    }

    /**
     * @param float $value
     */
    public function setPriceAttribute(float $value): void
    {
        $this->attributes['price'] = $value * 100;
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
    public function card(): BelongsTo
    {
        return $this->belongsTo(Card::class, 'card_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function cardCondition(): BelongsTo
    {
        return $this->belongsTo(CardCondition::class, 'card_condition_id', 'id');
    }
}