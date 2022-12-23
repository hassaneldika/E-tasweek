<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Project
 *
 * @property int $id
 * @property int $services_id
 * @property string $pr_name
 * @property string $pr_link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\ProjectFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project wherePrLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project wherePrName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereServicesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Project extends Model
{
    use HasFactory;
    protected $fillable = ['pr_link', 'pr_name', 'services_id'];

    public function media()
    {
        return $this->hasMany(Media::class, 'projects_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'services_id');
    }
}
