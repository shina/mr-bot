<?php
declare(strict_types=1);

namespace App\SimpleDataObject;

require_once __DIR__.'/simple-data-object.php';

trait ArrayableTrait
{

    public function toArray(): array
    {
        return toArray($this);
    }

}
