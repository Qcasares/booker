<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Quota
 * 
 * @property int $quota_id
 * @property float $quota_limit
 * @property string $unit
 * @property string $duration
 * @property int $resource_id
 * @property int $group_id
 * @property int $schedule_id
 * @property string $enforced_days
 * @property \Carbon\Carbon $enforced_time_start
 * @property \Carbon\Carbon $enforced_time_end
 * @property string $scope
 * 
 * @property \BBS\Models\Resource $resource
 * @property \BBS\Models\Group $group
 * @property \BBS\Models\Schedule $schedule
 *
 * @package BBS\Models
 */
class Quota extends Eloquent
{
	protected $primaryKey = 'quota_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'quota_limit' => 'float',
		'resource_id' => 'int',
		'group_id' => 'int',
		'schedule_id' => 'int'
	];

	protected $dates = [
		'enforced_time_start',
		'enforced_time_end'
	];

	protected $fillable = [
		'quota_limit',
		'unit',
		'duration',
		'resource_id',
		'group_id',
		'schedule_id',
		'enforced_days',
		'enforced_time_start',
		'enforced_time_end',
		'scope'
	];

	public function resource()
	{
		return $this->belongsTo(\BBS\Models\Resource::class);
	}

	public function group()
	{
		return $this->belongsTo(\BBS\Models\Group::class);
	}

	public function schedule()
	{
		return $this->belongsTo(\BBS\Models\Schedule::class);
	}
}
