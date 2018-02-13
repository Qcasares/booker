<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BlackoutSeriesResource
 * 
 * @property int $blackout_series_id
 * @property int $resource_id
 * 
 * @property \BBS\Models\BlackoutSeries $blackout_series
 * @property \BBS\Models\Resource $resource
 *
 * @package BBS\Models
 */
class BlackoutSeriesResource extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'blackout_series_id' => 'int',
		'resource_id' => 'int'
	];

	public function blackout_series()
	{
		return $this->belongsTo(\BBS\Models\BlackoutSeries::class);
	}

	public function resource()
	{
		return $this->belongsTo(\BBS\Models\Resource::class);
	}
}
