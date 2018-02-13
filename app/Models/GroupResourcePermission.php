<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GroupResourcePermission
 * 
 * @property int $group_id
 * @property int $resource_id
 * 
 * @property \BBS\Models\Group $group
 * @property \BBS\Models\Resource $resource
 *
 * @package BBS\Models
 */
class GroupResourcePermission extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'group_id' => 'int',
		'resource_id' => 'int'
	];

	public function group()
	{
		return $this->belongsTo(\BBS\Models\Group::class);
	}

	public function resource()
	{
		return $this->belongsTo(\BBS\Models\Resource::class);
	}
}
