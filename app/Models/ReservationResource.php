<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ReservationResource
 * 
 * @property int $series_id
 * @property int $resource_id
 * @property int $resource_level_id
 * 
 * @property \BBS\Models\Resource $resource
 * @property \BBS\Models\ReservationSeries $reservation_series
 *
 * @package BBS\Models
 */
class ReservationResource extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'series_id' => 'int',
		'resource_id' => 'int',
		'resource_level_id' => 'int'
	];

	protected $fillable = [
		'resource_level_id'
	];

	public function resource()
	{
		return $this->belongsTo(\BBS\Models\Resource::class);
	}

	public function reservation_series()
	{
		return $this->belongsTo(\BBS\Models\ReservationSeries::class, 'series_id');
	}
}
