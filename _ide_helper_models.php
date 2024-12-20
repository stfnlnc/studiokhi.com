<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $subtitle
 * @property string $category
 * @property string $type
 * @property string $date
 * @property string|null $url
 * @property string $description
 * @property int|null $order
 * @property int $online
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\WorkFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Work newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Work newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Work query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Work whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Work whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Work whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Work whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Work whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Work whereOnline($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Work whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Work whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Work whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Work whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Work whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Work whereUrl($value)
 */
	class Work extends \Eloquent {}
}

