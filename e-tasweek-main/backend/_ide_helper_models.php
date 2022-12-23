<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\AboutUs
 *
 * @property int $id
 * @property string $au_description
 * @property string $au_address
 * @property string $au_phone
 * @property string $au_email
 * @property string $au_logo
 * @property string $au_location
 * @property string $au_opening_hours
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\AboutUsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs query()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs whereAuAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs whereAuDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs whereAuEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs whereAuLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs whereAuLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs whereAuOpeningHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs whereAuPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUs whereUpdatedAt($value)
 */
	class AboutUs extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ContactUs
 *
 * @property int $id
 * @property string $cu_name
 * @property string $cu_mail
 * @property string $cu_message
 * @property string $cu_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ContactUsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereCuDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereCuMail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereCuMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereCuName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereUpdatedAt($value)
 */
	class ContactUs extends \Eloquent {}
}

namespace App\Models{
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
 * @property int|null $project_id
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereProjectId($value)
 */
	class Media extends \Eloquent {}
}

namespace App\Models{
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
	class Offer extends \Eloquent {}
}

namespace App\Models{
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
 * @property-read \App\Models\Service $service
 */
	class Project extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Service
 *
 * @property int $id
 * @property string $su_name
 * @property string $su_description
 * @property string $isActive
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Project[] $project
 * @property-read int|null $project_count
 * @method static \Database\Factories\ServiceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereSuDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereSuName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 */
	class Service extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SystemRole
 *
 * @property int $id
 * @property string $sr_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SystemUser[] $systemuser
 * @property-read int|null $systemuser_count
 * @method static \Database\Factories\SystemRoleFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemRole query()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemRole whereSrName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemRole whereUpdatedAt($value)
 */
	class SystemRole extends \Eloquent {}
}

namespace App\Models{
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
 * @property string $f_name
 * @property string $l_name
 * @property string $email
 * @property string $phone
 * @property string $username
 * @property string $password
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereFName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereLName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemUser whereUsername($value)
 */
	class SystemUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

