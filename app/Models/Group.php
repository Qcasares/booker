<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Group
 * 
 * @property int $group_id
 * @property string $name
 * @property int $admin_group_id
 * @property string $legacyid
 * 
 * @property \BBS\Models\Group $group
 * @property \Illuminate\Database\Eloquent\Collection $announcements
 * @property \Illuminate\Database\Eloquent\Collection $resources
 * @property \Illuminate\Database\Eloquent\Collection $roles
 * @property \Illuminate\Database\Eloquent\Collection $groups
 * @property \Illuminate\Database\Eloquent\Collection $quotas
 * @property \Illuminate\Database\Eloquent\Collection $schedules
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package BBS\Models
 */
class Group extends Eloquent
{
	protected $primaryKey = 'group_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'admin_group_id' => 'int'
	];

	protected $fillable = [
		'name',
		'admin_group_id',
		'legacyid'
	];

	public function group()
	{
		return $this->belongsTo(\BBS\Models\Group::class, 'admin_group_id');
	}

	public function announcements()
	{
		return $this->belongsToMany(\BBS\Models\Announcement::class, 'announcement_groups', 'group_id', 'announcementid');
	}

	public function resources()
	{
		return $this->hasMany(\BBS\Models\Resource::class, 'admin_group_id');
	}

	public function roles()
	{
		return $this->belongsToMany(\BBS\Models\Role::class, 'group_roles');
	}

	public function groups()
	{
		return $this->hasMany(\BBS\Models\Group::class, 'admin_group_id');
	}

	public function quotas()
	{
		return $this->hasMany(\BBS\Models\Quota::class);
	}

	public function schedules()
	{
		return $this->hasMany(\BBS\Models\Schedule::class, 'admin_group_id');
	}

	public function users()
	{
		return $this->belongsToMany(\BBS\Models\User::class, 'user_groups', 'group_id', 'id');
	}
}
