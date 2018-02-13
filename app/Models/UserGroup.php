<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserGroup
 * 
 * @property int $id
 * @property int $group_id
 * 
 * @property \BBS\Models\User $user
 * @property \BBS\Models\Group $group
 *
 * @package BBS\Models
 */
class UserGroup extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'id' => 'int',
		'group_id' => 'int'
	];

	public function user()
	{
		return $this->belongsTo(\BBS\Models\User::class, 'id');
	}

	public function group()
	{
		return $this->belongsTo(\BBS\Models\Group::class);
	}
}
