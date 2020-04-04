<?php

namespace Collex\Domain\Deals\Models;

use Collex\Domain\Cards\Models\Card;
use Collex\Domain\Payments\Models\Payment;
use Collex\Domain\UserFunctions\Models\CardCondition;
use Collex\Domain\Users\Models\Address;
use Collex\Domain\Users\Models\Fee;
use Collex\Domain\Users\Models\User;
use Collex\Infrastructure\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Deal extends Model
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
     * @return BelongsToMany
     */
    public function fees(): BelongsToMany
    {
        return $this->belongsToMany(Fee::class, 'deals_fees', 'fee_id', 'deal_id');
    }

    /**
     * @return BelongsTo
     */
    public function buyer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'buyer_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function seller(): BelongsTo
    {
        return $this->belongsTo(User::class, 'seller_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function buyerAddress(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'buyer_address_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function sellerAddress(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'seller_address_id', 'id');
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

    /**
     * @return BelongsTo
     */
    public function dealType(): BelongsTo
    {
        return $this->belongsTo(DealType::class, 'deal_type_id', 'id');
    }

    /**
     * @return HasOne
     */
    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class, 'deal_id', 'id');
    }
}