<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ReservationGuest
 * 
 * @property int $reservation_instance_id
 * @property string $email
 * @property int $reservation_user_level
 * 
 * @property \BBS\Models\ReservationInstance $reservation_instance
 *
 * @package BBS\Models
 */
class ReservationGuest extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'reservation_instance_id' => 'int',
		'reservation_user_level' => 'int'
	];

	protected $fillable = [
		'reservation_user_level'
	];

	public function reservation_instance()
	{
		return $this->belongsTo(\BBS\Models\ReservationInstance::class);
	}
}
