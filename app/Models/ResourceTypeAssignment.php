<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ResourceTypeAssignment
 * 
 * @property int $resource_id
 * @property int $resource_type_id
 * 
 * @property \BBS\Models\Resource $resource
 * @property \BBS\Models\ResourceType $resource_type
 *
 * @package BBS\Models
 */
class ResourceTypeAssignment extends Eloquent
{
	protected $table = 'resource_type_assignment';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'resource_id' => 'int',
		'resource_type_id' => 'int'
	];

	public function resource()
	{
		return $this->belongsTo(\BBS\Models\Resource::class);
	}

	public function resource_type()
	{
		return $this->belongsTo(\BBS\Models\ResourceType::class);
	}
}
