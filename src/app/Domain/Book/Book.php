<?php

namespace Domain\Book;

use Domain\Book\Factory\BookFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 *
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property int $image_id
 * @property string $description
 * @property bool $is_active
 * @property int|null $age
 * @property string $time
 * @property int|null $cycle_number
 * @property int|null $cycle_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static BookFactory factory($count = null, $state = [])
 * @method static Builder<static>|Book newModelQuery()
 * @method static Builder<static>|Book newQuery()
 * @method static Builder<static>|Book onlyTrashed()
 * @method static Builder<static>|Book query()
 * @method static Builder<static>|Book whereAge($value)
 * @method static Builder<static>|Book whereCreatedAt($value)
 * @method static Builder<static>|Book whereCycleId($value)
 * @method static Builder<static>|Book whereCycleNumber($value)
 * @method static Builder<static>|Book whereDeletedAt($value)
 * @method static Builder<static>|Book whereDescription($value)
 * @method static Builder<static>|Book whereId($value)
 * @method static Builder<static>|Book whereImageId($value)
 * @method static Builder<static>|Book whereIsActive($value)
 * @method static Builder<static>|Book whereSlug($value)
 * @method static Builder<static>|Book whereTime($value)
 * @method static Builder<static>|Book whereTitle($value)
 * @method static Builder<static>|Book whereUpdatedAt($value)
 * @method static Builder<static>|Book withTrashed()
 * @method static Builder<static>|Book withoutTrashed()
 */
class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'image_id',
        'description',
        'is_active',
        'age',
        'time',
        'cycle_number',
        'cycle_id',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected static function newFactory(): BookFactory
    {
        return BookFactory::new();
    }
}
