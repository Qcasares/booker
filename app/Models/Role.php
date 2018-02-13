<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Role
 * 
 * @property int $role_id
 * @property string $name
 * @property int $role_level
 * 
 * @property \Illuminate\Database\Eloquent\Collection $groups
 *
 * @package BBS\Models
 */
class Role extends Eloquent
{
	protected $primaryKey = 'role_id';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'role_id' => 'int',
		'role_level' => 'int'
	];

	protected $fillable = [
		'name',
		'role_level'
	];

	public function groups()
	{
		return $this->belongsToMany(\BBS\Models\Group::class, 'group_roles');
	}
}
