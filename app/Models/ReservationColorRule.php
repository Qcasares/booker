<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ReservationColorRule
 * 
 * @property int $reservation_color_rule_id
 * @property int $custom_attribute_id
 * @property int $attribute_type
 * @property string $required_value
 * @property int $comparison_type
 * @property string $color
 * 
 * @property \BBS\Models\CustomAttribute $custom_attribute
 *
 * @package BBS\Models
 */
class ReservationColorRule extends Eloquent
{
	protected $primaryKey = 'reservation_color_rule_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'custom_attribute_id' => 'int',
		'attribute_type' => 'int',
		'comparison_type' => 'int'
	];

	protected $fillable = [
		'custom_attribute_id',
		'attribute_type',
		'required_value',
		'comparison_type',
		'color'
	];

	public function custom_attribute()
	{
		return $this->belongsTo(\BBS\Models\CustomAttribute::class);
	}
}
