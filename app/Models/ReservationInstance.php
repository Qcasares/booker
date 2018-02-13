<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ReservationInstance
 * 
 * @property int $reservation_instance_id
 * @property \Carbon\Carbon $start_date
 * @property \Carbon\Carbon $end_date
 * @property string $reference_number
 * @property int $series_id
 * @property \Carbon\Carbon $checkin_date
 * @property \Carbon\Carbon $checkout_date
 * @property \Carbon\Carbon $previous_end_date
 * @property float $credit_count
 * 
 * @property \BBS\Models\ReservationSeries $reservation_series
 * @property \Illuminate\Database\Eloquent\Collection $reservation_guests
 *
 * @package BBS\Models
 */
class ReservationInstance extends Eloquent
{
	protected $primaryKey = 'reservation_instance_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'series_id' => 'int',
		'credit_count' => 'float'
	];

	protected $dates = [
		'start_date',
		'end_date',
		'checkin_date',
		'checkout_date',
		'previous_end_date'
	];

	protected $fillable = [
		'start_date',
		'end_date',
		'reference_number',
		'series_id',
		'checkin_date',
		'checkout_date',
		'previous_end_date',
		'credit_count'
	];

	public function reservation_series()
	{
		return $this->belongsTo(\BBS\Models\ReservationSeries::class, 'series_id');
	}

	public function reservation_guests()
	{
		return $this->hasMany(\BBS\Models\ReservationGuest::class);
	}
}
