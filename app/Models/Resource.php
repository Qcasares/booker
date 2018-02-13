<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Resource
 * 
 * @property int $resource_id
 * @property string $name
 * @property string $location
 * @property string $contact_info
 * @property string $description
 * @property string $notes
 * @property int $min_duration
 * @property int $min_increment
 * @property int $max_duration
 * @property float $unit_cost
 * @property bool $autoassign
 * @property bool $requires_approval
 * @property bool $allow_multiday_reservations
 * @property int $max_participants
 * @property int $min_notice_time
 * @property int $max_notice_time
 * @property string $image_name
 * @property int $schedule_id
 * @property string $legacyid
 * @property int $admin_group_id
 * @property string $public_id
 * @property bool $allow_calendar_subscription
 * @property int $sort_order
 * @property int $resource_type_id
 * @property int $status_id
 * @property int $resource_status_reason_id
 * @property int $buffer_time
 * @property bool $enable_check_in
 * @property int $auto_release_minutes
 * @property string $color
 * @property bool $allow_display
 * @property float $credit_count
 * @property float $peak_credit_count
 * 
 * @property \BBS\Models\Group $group
 * @property \BBS\Models\Schedule $schedule
 * @property \BBS\Models\ResourceType $resource_type
 * @property \BBS\Models\ResourceStatusReason $resource_status_reason
 * @property \Illuminate\Database\Eloquent\Collection $announcements
 * @property \Illuminate\Database\Eloquent\Collection $blackout_series
 * @property \Illuminate\Database\Eloquent\Collection $groups
 * @property \Illuminate\Database\Eloquent\Collection $quotas
 * @property \Illuminate\Database\Eloquent\Collection $reservation_resources
 * @property \Illuminate\Database\Eloquent\Collection $resource_accessories
 * @property \Illuminate\Database\Eloquent\Collection $resource_group_assignments
 * @property \Illuminate\Database\Eloquent\Collection $resource_type_assignments
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package BBS\Models
 */
class Resource extends Eloquent
{
	protected $primaryKey = 'resource_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'min_duration' => 'int',
		'min_increment' => 'int',
		'max_duration' => 'int',
		'unit_cost' => 'float',
		'autoassign' => 'bool',
		'requires_approval' => 'bool',
		'allow_multiday_reservations' => 'bool',
		'max_participants' => 'int',
		'min_notice_time' => 'int',
		'max_notice_time' => 'int',
		'schedule_id' => 'int',
		'admin_group_id' => 'int',
		'allow_calendar_subscription' => 'bool',
		'sort_order' => 'int',
		'resource_type_id' => 'int',
		'status_id' => 'int',
		'resource_status_reason_id' => 'int',
		'buffer_time' => 'int',
		'enable_check_in' => 'bool',
		'auto_release_minutes' => 'int',
		'allow_display' => 'bool',
		'credit_count' => 'float',
		'peak_credit_count' => 'float'
	];

	protected $fillable = [
		'name',
		'location',
		'contact_info',
		'description',
		'notes',
		'min_duration',
		'min_increment',
		'max_duration',
		'unit_cost',
		'autoassign',
		'requires_approval',
		'allow_multiday_reservations',
		'max_participants',
		'min_notice_time',
		'max_notice_time',
		'image_name',
		'schedule_id',
		'legacyid',
		'admin_group_id',
		'public_id',
		'allow_calendar_subscription',
		'sort_order',
		'resource_type_id',
		'status_id',
		'resource_status_reason_id',
		'buffer_time',
		'enable_check_in',
		'auto_release_minutes',
		'color',
		'allow_display',
		'credit_count',
		'peak_credit_count'
	];

	public function group()
	{
		return $this->belongsTo(\BBS\Models\Group::class, 'admin_group_id');
	}

	public function schedule()
	{
		return $this->belongsTo(\BBS\Models\Schedule::class);
	}

	public function resource_type()
	{
		return $this->belongsTo(\BBS\Models\ResourceType::class);
	}

	public function resource_status_reason()
	{
		return $this->belongsTo(\BBS\Models\ResourceStatusReason::class);
	}

	public function announcements()
	{
		return $this->belongsToMany(\BBS\Models\Announcement::class, 'announcement_resources', 'resource_id', 'announcementid');
	}

	public function blackout_series()
	{
		return $this->belongsToMany(\BBS\Models\BlackoutSeries::class, 'blackout_series_resources');
	}

	public function groups()
	{
		return $this->belongsToMany(\BBS\Models\Group::class, 'group_resource_permissions');
	}

	public function quotas()
	{
		return $this->hasMany(\BBS\Models\Quota::class);
	}

	public function reservation_resources()
	{
		return $this->hasMany(\BBS\Models\ReservationResource::class);
	}

	public function resource_accessories()
	{
		return $this->hasMany(\BBS\Models\ResourceAccessory::class);
	}

	public function resource_group_assignments()
	{
		return $this->hasMany(\BBS\Models\ResourceGroupAssignment::class);
	}

	public function resource_type_assignments()
	{
		return $this->hasMany(\BBS\Models\ResourceTypeAssignment::class);
	}

	public function users()
	{
		return $this->belongsToMany(\BBS\Models\User::class, 'user_resource_permissions', 'resource_id', 'id')
					->withPivot('permission_id');
	}
}
