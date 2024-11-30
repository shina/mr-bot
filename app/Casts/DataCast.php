<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class DataCast implements CastsAttributes
{

    public function __construct(private string $className) {
    }

    public function get(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        dump('oi');
        return $this->className::fromArray(json_decode($value ?? '{}', true));
    }

    public function set(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        return json_encode($value->toArray());
    }
}
