<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ReservationFile
 * 
 * @property int $file_id
 * @property int $series_id
 * @property string $file_name
 * @property string $file_type
 * @property string $file_size
 * @property string $file_extension
 * 
 * @property \BBS\Models\ReservationSeries $reservation_series
 *
 * @package BBS\Models
 */
class ReservationFile extends Eloquent
{
	protected $primaryKey = 'file_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'series_id' => 'int'
	];

	protected $fillable = [
		'series_id',
		'file_name',
		'file_type',
		'file_size',
		'file_extension'
	];

	public function reservation_series()
	{
		return $this->belongsTo(\BBS\Models\ReservationSeries::class, 'series_id');
	}
}
