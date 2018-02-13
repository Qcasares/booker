<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ResourceGroupAssignment
 * 
 * @property int $resource_group_id
 * @property int $resource_id
 * 
 * @property \BBS\Models\ResourceGroup $resource_group
 * @property \BBS\Models\Resource $resource
 *
 * @package BBS\Models
 */
class ResourceGroupAssignment extends Eloquent
{
	protected $table = 'resource_group_assignment';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'resource_group_id' => 'int',
		'resource_id' => 'int'
	];

	public function resource_group()
	{
		return $this->belongsTo(\BBS\Models\ResourceGroup::class);
	}

	public function resource()
	{
		return $this->belongsTo(\BBS\Models\Resource::class);
	}
}
