<?php

namespace App\SimpleDataObject;

interface Hydratable
{

    public static function fromArray(array $data): static;

}
