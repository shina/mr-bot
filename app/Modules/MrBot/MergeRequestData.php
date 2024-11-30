<?php
declare(strict_types=1);

namespace App\Modules\MrBot;

use App\SimpleDataObject\ArrayableTrait;
use App\SimpleDataObject\Hydratable;

class MergeRequestData implements Hydratable
{
    use ArrayableTrait;

    public function __construct(

    ) {}

    public static function fromArray(array $data = []): static
    {
        return new static(...$data);
    }

}
