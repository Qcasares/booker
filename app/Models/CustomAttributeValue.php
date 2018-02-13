<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CustomAttributeValue
 * 
 * @property int $custom_attribute_value_id
 * @property int $custom_attribute_id
 * @property string $attribute_value
 * @property int $entity_id
 * @property int $attribute_category
 *
 * @package BBS\Models
 */
class CustomAttributeValue extends Eloquent
{
	protected $primaryKey = 'custom_attribute_value_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'custom_attribute_id' => 'int',
		'entity_id' => 'int',
		'attribute_category' => 'int'
	];

	protected $fillable = [
		'custom_attribute_id',
		'attribute_value',
		'entity_id',
		'attribute_category'
	];
}
