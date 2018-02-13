<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Accessory
 * 
 * @property int $accessory_id
 * @property string $accessory_name
 * @property int $accessory_quantity
 * @property string $legacyid
 * 
 * @property \Illuminate\Database\Eloquent\Collection $reservation_accessories
 * @property \Illuminate\Database\Eloquent\Collection $resource_accessories
 *
 * @package BBS\Models
 */
class Accessory extends Eloquent
{
	protected $primaryKey = 'accessory_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'accessory_quantity' => 'int'
	];

	protected $fillable = [
		'accessory_name',
		'accessory_quantity',
		'legacyid'
	];

	public function reservation_accessories()
	{
		return $this->hasMany(\BBS\Models\ReservationAccessory::class);
	}

	public function resource_accessories()
	{
		return $this->hasMany(\BBS\Models\ResourceAccessory::class);
	}
}
