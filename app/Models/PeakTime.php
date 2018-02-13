<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PeakTime
 * 
 * @property int $peak_times_id
 * @property int $schedule_id
 * @property bool $all_day
 * @property string $start_time
 * @property string $end_time
 * @property bool $every_day
 * @property string $peak_days
 * @property bool $all_year
 * @property bool $begin_month
 * @property bool $begin_day
 * @property bool $end_month
 * @property bool $end_day
 * 
 * @property \BBS\Models\Schedule $schedule
 *
 * @package BBS\Models
 */
class PeakTime extends Eloquent
{
	protected $primaryKey = 'peak_times_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'schedule_id' => 'int',
		'all_day' => 'bool',
		'every_day' => 'bool',
		'all_year' => 'bool',
		'begin_month' => 'bool',
		'begin_day' => 'bool',
		'end_month' => 'bool',
		'end_day' => 'bool'
	];

	protected $fillable = [
		'schedule_id',
		'all_day',
		'start_time',
		'end_time',
		'every_day',
		'peak_days',
		'all_year',
		'begin_month',
		'begin_day',
		'end_month',
		'end_day'
	];

	public function schedule()
	{
		return $this->belongsTo(\BBS\Models\Schedule::class);
	}
}
