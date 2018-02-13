<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ResourceType
 * 
 * @property int $resource_type_id
 * @property string $resource_type_name
 * @property string $resource_type_description
 * 
 * @property \Illuminate\Database\Eloquent\Collection $resource_type_assignments
 * @property \Illuminate\Database\Eloquent\Collection $resources
 *
 * @package BBS\Models
 */
class ResourceType extends Eloquent
{
	protected $primaryKey = 'resource_type_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'resource_type_name',
		'resource_type_description'
	];

	public function resource_type_assignments()
	{
		return $this->hasMany(\BBS\Models\ResourceTypeAssignment::class);
	}

	public function resources()
	{
		return $this->hasMany(\BBS\Models\Resource::class);
	}
}
