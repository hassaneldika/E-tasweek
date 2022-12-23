<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Offer
 *
 * @property int $id
 * @property string $of_features
 * @property string $of_image
 * @property string $of_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\OfferFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Offer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Offer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereOfFeatures($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereOfImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereOfName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Offer extends Model
{
    use HasFactory;
    protected $fillable = ['of_name', 'of_image', 'of_features'];
}
