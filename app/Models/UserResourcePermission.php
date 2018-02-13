<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserResourcePermission
 * 
 * @property int $id
 * @property int $resource_id
 * @property int $permission_id
 * 
 * @property \BBS\Models\User $user
 * @property \BBS\Models\Resource $resource
 *
 * @package BBS\Models
 */
class UserResourcePermission extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'id' => 'int',
		'resource_id' => 'int',
		'permission_id' => 'int'
	];

	protected $fillable = [
		'permission_id'
	];

	public function user()
	{
		return $this->belongsTo(\BBS\Models\User::class, 'id');
	}

	public function resource()
	{
		return $this->belongsTo(\BBS\Models\Resource::class);
	}
}
