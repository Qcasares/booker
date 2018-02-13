<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Schedule
 * 
 * @property int $schedule_id
 * @property string $name
 * @property bool $isdefault
 * @property int $weekdaystart
 * @property int $daysvisible
 * @property int $layout_id
 * @property string $legacyid
 * @property string $public_id
 * @property bool $allow_calendar_subscription
 * @property int $admin_group_id
 * 
 * @property \BBS\Models\Group $group
 * @property \BBS\Models\Layout $layout
 * @property \Illuminate\Database\Eloquent\Collection $peak_times
 * @property \Illuminate\Database\Eloquent\Collection $quotas
 * @property \Illuminate\Database\Eloquent\Collection $resources
 *
 * @package BBS\Models
 */
class Schedule extends Eloquent
{
	protected $primaryKey = 'schedule_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'isdefault' => 'bool',
		'weekdaystart' => 'int',
		'daysvisible' => 'int',
		'layout_id' => 'int',
		'allow_calendar_subscription' => 'bool',
		'admin_group_id' => 'int'
	];

	protected $fillable = [
		'name',
		'isdefault',
		'weekdaystart',
		'daysvisible',
		'layout_id',
		'legacyid',
		'public_id',
		'allow_calendar_subscription',
		'admin_group_id'
	];

	public function group()
	{
		return $this->belongsTo(\BBS\Models\Group::class, 'admin_group_id');
	}

	public function layout()
	{
		return $this->belongsTo(\BBS\Models\Layout::class);
	}

	public function peak_times()
	{
		return $this->hasMany(\BBS\Models\PeakTime::class);
	}

	public function quotas()
	{
		return $this->hasMany(\BBS\Models\Quota::class);
	}

	public function resources()
	{
		return $this->hasMany(\BBS\Models\Resource::class);
	}
}
