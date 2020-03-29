<?php

namespace Collex\Infrastructure\Traits;

use Illuminate\Support\Str;

trait UsesUuid
{
    /**
     * Generate uuid when creating model.
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

    /**
     * @return bool
     */
    public function getIncrementing(): bool
    {
        return false;
    }

    /**
     * @return string
     */
    public function getKeyType(): string
    {
        return 'string';
    }
}