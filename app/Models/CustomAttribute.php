<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CustomAttribute
 * 
 * @property int $custom_attribute_id
 * @property string $display_label
 * @property int $display_type
 * @property int $attribute_category
 * @property string $validation_regex
 * @property bool $is_required
 * @property string $possible_values
 * @property int $sort_order
 * @property bool $admin_only
 * @property int $secondary_category
 * @property string $secondary_entity_ids
 * @property bool $is_private
 * 
 * @property \Illuminate\Database\Eloquent\Collection $custom_attribute_entities
 * @property \Illuminate\Database\Eloquent\Collection $reservation_color_rules
 *
 * @package BBS\Models
 */
class CustomAttribute extends Eloquent
{
	protected $primaryKey = 'custom_attribute_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'display_type' => 'int',
		'attribute_category' => 'int',
		'is_required' => 'bool',
		'sort_order' => 'int',
		'admin_only' => 'bool',
		'secondary_category' => 'int',
		'is_private' => 'bool'
	];

	protected $fillable = [
		'display_label',
		'display_type',
		'attribute_category',
		'validation_regex',
		'is_required',
		'possible_values',
		'sort_order',
		'admin_only',
		'secondary_category',
		'secondary_entity_ids',
		'is_private'
	];

	public function custom_attribute_entities()
	{
		return $this->hasMany(\BBS\Models\CustomAttributeEntity::class);
	}

	public function reservation_color_rules()
	{
		return $this->hasMany(\BBS\Models\ReservationColorRule::class);
	}
}
