<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ResourceAccessory
 * 
 * @property int $resource_accessory_id
 * @property int $resource_id
 * @property int $accessory_id
 * @property int $minimum_quantity
 * @property int $maximum_quantity
 * 
 * @property \BBS\Models\Resource $resource
 * @property \BBS\Models\Accessory $accessory
 *
 * @package BBS\Models
 */
class ResourceAccessory extends Eloquent
{
	protected $primaryKey = 'resource_accessory_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'resource_id' => 'int',
		'accessory_id' => 'int',
		'minimum_quantity' => 'int',
		'maximum_quantity' => 'int'
	];

	protected $fillable = [
		'resource_id',
		'accessory_id',
		'minimum_quantity',
		'maximum_quantity'
	];

	public function resource()
	{
		return $this->belongsTo(\BBS\Models\Resource::class);
	}

	public function accessory()
	{
		return $this->belongsTo(\BBS\Models\Accessory::class);
	}
}
