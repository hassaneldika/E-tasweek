<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SystemUser
 *
 * @property int $id
 * @property int $system_roles_id
 * @property string $su_f_name
 * @property string $su_l_name
 * @property string $su_email
 * @property string $su_phone
 * @property string $su_username
 * @property string $su_password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\SystemRole $systemrole
 * @method static \Database\Factories\SystemUserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereSuEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereSuFName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereSuLName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereSuPassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereSuPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereSuUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereSystemRolesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SystemUser extends Model
{
    use HasFactory;

    protected $fillable = ['su_f_name', 'su_l_name', 'su_email', 'su_phone', 'su_username', 'su_password', 'system_roles_id'];

    public function systemrole()
    {
        return $this->belongsTo(SystemRole::class, 'system_roles_id');
    }
}
