<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ReservationAccessory
 * 
 * @property int $series_id
 * @property int $accessory_id
 * @property int $quantity
 * 
 * @property \BBS\Models\Accessory $accessory
 * @property \BBS\Models\ReservationSeries $reservation_series
 *
 * @package BBS\Models
 */
class ReservationAccessory extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'series_id' => 'int',
		'accessory_id' => 'int',
		'quantity' => 'int'
	];

	protected $fillable = [
		'quantity'
	];

	public function accessory()
	{
		return $this->belongsTo(\BBS\Models\Accessory::class);
	}

	public function reservation_series()
	{
		return $this->belongsTo(\BBS\Models\ReservationSeries::class, 'series_id');
	}
}
