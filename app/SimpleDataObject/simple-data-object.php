<?php
declare(strict_types=1);

function toArray(mixed $obj): array {
    $data = (array)($obj);
    foreach ($data as $key => $value) {
        if (is_object($value)) {
            $data[$key] = toArray($value);
        }
    }

    return $data;
}
