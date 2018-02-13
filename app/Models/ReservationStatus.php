<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ReservationStatus
 * 
 * @property int $status_id
 * @property string $label
 * 
 * @property \Illuminate\Database\Eloquent\Collection $reservation_series
 *
 * @package BBS\Models
 */
class ReservationStatus extends Eloquent
{
	protected $primaryKey = 'status_id';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'status_id' => 'int'
	];

	protected $fillable = [
		'label'
	];

	public function reservation_series()
	{
		return $this->hasMany(\BBS\Models\ReservationSeries::class, 'status_id');
	}
}
