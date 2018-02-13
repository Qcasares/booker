<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BlackoutInstance
 * 
 * @property int $blackout_instance_id
 * @property \Carbon\Carbon $start_date
 * @property \Carbon\Carbon $end_date
 * @property int $blackout_series_id
 * 
 * @property \BBS\Models\BlackoutSeries $blackout_series
 *
 * @package BBS\Models
 */
class BlackoutInstance extends Eloquent
{
	protected $primaryKey = 'blackout_instance_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'blackout_series_id' => 'int'
	];

	protected $dates = [
		'start_date',
		'end_date'
	];

	protected $fillable = [
		'start_date',
		'end_date',
		'blackout_series_id'
	];

	public function blackout_series()
	{
		return $this->belongsTo(\BBS\Models\BlackoutSeries::class);
	}
}
