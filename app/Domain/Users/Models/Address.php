<?php

namespace Collex\Domain\Users\Models;

use Collex\Infrastructure\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use UsesUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'line_1',
        'line_2',
        'line_3',
        'town_city',
        'state_country_province',
        'country',
        'zip_post_code',
    ];
}