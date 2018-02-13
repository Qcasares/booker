<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GroupRole
 * 
 * @property int $group_id
 * @property int $role_id
 * 
 * @property \BBS\Models\Group $group
 * @property \BBS\Models\Role $role
 *
 * @package BBS\Models
 */
class GroupRole extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'group_id' => 'int',
		'role_id' => 'int'
	];

	public function group()
	{
		return $this->belongsTo(\BBS\Models\Group::class);
	}

	public function role()
	{
		return $this->belongsTo(\BBS\Models\Role::class);
	}
}
