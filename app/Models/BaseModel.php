<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

/**
 * @property int $id
 * @property string $created_at
 * @property string $deleted_at
 * @property string $published_at
 * @property string $updated_at
 * @mixin Builder
*/
abstract class BaseModel extends Model
{
    use HasTags;

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'deleted_at' => 'datetime:Y-m-d H:i:s',
        'published_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public function getSlugFrom(string $string): array
    {
        return [
            'slug' => [
                'source' => $string,
            ],
        ];
    }
}
