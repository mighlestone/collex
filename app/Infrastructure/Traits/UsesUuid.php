<?php

namespace Collex\Infrastructure\Traits;

use Illuminate\Support\Str;

trait UsesUuid
{
    /**
     *
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->getKey()) === true) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}