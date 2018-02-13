<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CustomAttributeEntity
 * 
 * @property int $custom_attribute_id
 * @property int $entity_id
 * 
 * @property \BBS\Models\CustomAttribute $custom_attribute
 *
 * @package BBS\Models
 */
class CustomAttributeEntity extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'custom_attribute_id' => 'int',
		'entity_id' => 'int'
	];

	public function custom_attribute()
	{
		return $this->belongsTo(\BBS\Models\CustomAttribute::class);
	}
}
