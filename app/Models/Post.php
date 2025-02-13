<?php

declare(strict_types=1);

namespace App\Models;

use App\Builders\PostQueryBuilder;
use App\Traits\SearchTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mpociot\Versionable\VersionableTrait;
use Oddvalue\LaravelDrafts\Concerns\HasDrafts;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Tags\HasTags;

/**
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $link_text
 * @property string $link_url
 * @property string $body
 * @property string $more_inside
 * @property int $legacy_id
 * @property int $subsite_id
 * @property int $user_id
 * @property string $published_at
 * @property bool $is_published
 * @property string $state
 */
final class Post extends BaseModel implements HasMedia
{
    use HasDrafts;
    use HasFactory;
    use HasTags;
    use InteractsWithMedia;
    use LogsActivity;
    use SearchTrait;
    use Sluggable;
    use SoftDeletes;
    use VersionableTrait;

    // Properties

    protected $fillable = [
        'title',
        'link_text',
        'link_url',
        'body',
        'more_inside',
        'legacy_id',
        'subsite_id',
        'user_id',
        'published_at',
        'is_published',
        'state',
    ];

    protected array $searchable = [
        'title',
        'body',
        'link_text',
        'link_url',
        'more_inside',
    ];

    public function isFavoritedBy(User $user): bool
    {
        return $this->favorites()->where('user_id', '=', $user->id)->exists();
    }

    public function isFlaggedBy(User $user): bool
    {
        return $this->flags()->where('user_id', '=', $user->id)->exists();
    }

    public function sluggable(): array
    {
        return $this->getSlugFrom('title');
    }

    protected function isArchived(): Attribute
    {
        $archiveDate = now()->subDays(30);

        return Attribute::make(
            get: fn (bool $value) => $this->created_at <= $archiveDate,
        );
    }

    public function getActivityLogOptions(): LogOptions
    {
        return LogOptions::defaults()->logFillable();
    }

    // Builders

/*
    public function newEloquentBuilder($query): PostQueryBuilder
    {
        return new PostQueryBuilder($query);
    }
*/
    // Relationships

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function favorites(): MorphMany
    {
        return $this->morphMany(Favorite::class, 'favoritable');
    }

    public function flags(): MorphMany
    {
        return $this->morphMany(Flag::class, 'flaggable');
    }

    public function next(): Post|null
    {
        return $this->orderBy('id')
            ->where('id', '>', $this->id)
            ->where('subsite_id', '=', $this->subsite_id)
            ->first();
    }

    public function previous(): Post|null
    {
        return $this->orderByDesc('id')
            ->where('id', '<', $this->id)
            ->where('subsite_id', '=', $this->subsite_id)
            ->first();
    }

    public function subsite(): BelongsTo
    {
        return $this->belongsTo(Subsite::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
