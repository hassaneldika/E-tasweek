<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Media
 *
 * @property int $id
 * @property int $projects_id
 * @property int $services_id
 * @property string $mi_text
 * @property string $mi_type
 * @property string $mi_for
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Project|null $project
 * @property-read \App\Models\Service|null $service
 * @method static \Database\Factories\MediaFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Media newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media query()
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereMiFor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereMiText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereMiType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereProjectsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereServicesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'projects_id',
        'services_id',
        'mi_text',
        'mi_type',
        'mi_for',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'projects_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'services_id');
    }
}
