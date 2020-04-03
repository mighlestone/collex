<?php

namespace Collex\Domain\Users\Models;

use Collex\Domain\UserFunctions\Models\Ask;
use Collex\Domain\UserFunctions\Models\Bid;
use Collex\Domain\UserFunctions\Models\Follow;
use Collex\Domain\UserFunctions\Models\Portfolio;
use Collex\Infrastructure\Traits\UsesUuid;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;
    use UsesUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'seller_fee_id',
        'username',
        'first_name',
        'last_name',
        'email',
        'dob',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'dob'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'date' => 'date'
    ];

    /**
     * @inheritDoc
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * @inheritDoc
     */
    public function getJWTCustomClaims(): array
    {
        return [];
    }

    /**
     * @return BelongsToMany
     */
    public function addresses(): BelongsToMany
    {
        return $this->belongsToMany(Address::class, 'users_addresses', 'address_id', 'user_id');
    }

    /**
     * @return BelongsTo
     */
    public function fee(): BelongsTo
    {
        return $this->belongsTo(Fee::class, 'seller_fee_id', 'id');
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
    public function portfolio(): HasMany
    {
        return $this->hasMany(Portfolio::class);
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
}
