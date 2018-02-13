<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ReservationReminder
 * 
 * @property int $reminder_id
 * @property int $series_id
 * @property int $minutes_prior
 * @property int $reminder_type
 * 
 * @property \BBS\Models\ReservationSeries $reservation_series
 *
 * @package BBS\Models
 */
class ReservationReminder extends Eloquent
{
	protected $primaryKey = 'reminder_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'series_id' => 'int',
		'minutes_prior' => 'int',
		'reminder_type' => 'int'
	];

	protected $fillable = [
		'series_id',
		'minutes_prior',
		'reminder_type'
	];

	public function reservation_series()
	{
		return $this->belongsTo(\BBS\Models\ReservationSeries::class, 'series_id');
	}
}
