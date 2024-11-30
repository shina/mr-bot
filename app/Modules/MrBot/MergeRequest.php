<?php

namespace App\Modules\MrBot;

use App\Casts\DataCast;
use Illuminate\Database\Eloquent\Model;

/**
 * @property MergeRequestData $data
 */
class MergeRequest extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'mr_id',
        'data',
    ];

    protected function casts(): array
    {
        return [
            'data' => DataCast::class.':'.MergeRequestData::class,
        ];
    }
}
