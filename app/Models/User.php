<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable  as Authenticatable;

/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $fname
 * @property string $test
 * @property string $lname
 * @property string $username
 * @property string $salt
 * @property string $organization
 * @property string $position
 * @property string $phone
 * @property string $timezone
 * @property string $language
 * @property int $homepageid
 * @property \Carbon\Carbon $date_created
 * @property \Carbon\Carbon $last_modified
 * @property \Carbon\Carbon $lastlogin
 * @property int $status_id
 * @property string $legacyid
 * @property string $legacypassword
 * @property string $public_id
 * @property bool $allow_calendar_subscription
 * @property int $default_schedule_id
 * @property float $credit_count
 *
 * @property \Illuminate\Database\Eloquent\Collection $reservation_series
 * @property \Illuminate\Database\Eloquent\Collection $groups
 * @property \Illuminate\Database\Eloquent\Collection $resources
 *
 * @package BBS\Models
 */
class User extends Eloquent implements Authenticatable
{

	use AuthenticableTrait;


	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'homepageid' => 'int',
		'status_id' => 'int',
		'allow_calendar_subscription' => 'bool',
		'default_schedule_id' => 'int',
		'credit_count' => 'float'
	];

	protected $dates = [
		'date_created',
		'last_modified',
		'lastlogin'
	];

	protected $hidden = [
		'password',
		'legacypassword',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'password',
		'fname',
		'test',
		'lname',
		'username',
		'salt',
		'organization',
		'position',
		'phone',
		'timezone',
		'language',
		'homepageid',
		'date_created',
		'last_modified',
		'lastlogin',
		'status_id',
		'legacyid',
		'legacypassword',
		'public_id',
		'allow_calendar_subscription',
		'default_schedule_id',
		'credit_count'
	];

	public function reservation_series()
	{
		return $this->hasMany(\BBS\Models\ReservationSeries::class, 'owner_id');
	}

	public function groups()
	{
		return $this->belongsToMany(\BBS\Models\Group::class, 'user_groups', 'id');
	}

	public function resources()
	{
		return $this->belongsToMany(\BBS\Models\Resource::class, 'user_resource_permissions', 'id')
					->withPivot('permission_id');
	}
}
