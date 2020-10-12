<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Tweet
 *
 * @property int $id
 * @property int $user_id
 * @property string $body
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $user
 * @method static Builder|Tweet newModelQuery()
 * @method static Builder|Tweet newQuery()
 * @method static Builder|Tweet query()
 * @method static Builder|Tweet whereBody($value)
 * @method static Builder|Tweet whereCreatedAt($value)
 * @method static Builder|Tweet whereId($value)
 * @method static Builder|Tweet whereUpdatedAt($value)
 * @method static Builder|Tweet whereUserId($value)
 * @mixin Eloquent
 */
class Tweet extends Model
{
    protected $fillable = [
        'user_id','body',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
