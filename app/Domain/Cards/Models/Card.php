<?php

namespace Collex\Domain\Cards\Models;

use Collex\Domain\UserFunctions\Models\Ask;
use Collex\Domain\UserFunctions\Models\Bid;
use Collex\Domain\UserFunctions\Models\Follow;
use Collex\Domain\UserFunctions\Models\Portfolio;
use Collex\Infrastructure\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Card extends Model
{
    use UsesUuid;

    /**
     * @return BelongsTo
     */
    public function manufacturer(): BelongsTo
    {
        return $this->belongsTo(Manufacturer::class, 'manufacturer_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
    }

    /**
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'cards_tags', 'tag_id', 'card_id');
    }

    /**
     * @return HasMany
     */
    public function asks(): HasMany
    {
        return $this->hasMany(Ask::class);
    }

    /**
     * @return HasMany
     */
    public function bids(): HasMany
    {
        return $this->hasMany(Bid::class);
    }

    /**
     * @return Model|null
     */
    public function lowestAsk(): ?Model
    {
        return $this->asks()
            ->orderBy('price', 'asc')
            ->first();
    }

    /**
     * @return Model|null
     */
    public function highestBid(): ?Model
    {
        return $this->bids()
            ->orderBy('amount', 'desc')
            ->first();
    }

    /**
     * @return HasMany
     */
    public function following(): HasMany
    {
        return $this->hasMany(Follow::class);
    }

    /**
     * @return HasMany
     */
    public function portfolios(): HasMany
    {
        return $this->hasMany(Portfolio::class);
    }
}