<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ResourceGroup
 * 
 * @property int $resource_group_id
 * @property string $resource_group_name
 * @property int $parent_id
 * @property string $public_id
 * 
 * @property \BBS\Models\ResourceGroup $resource_group
 * @property \Illuminate\Database\Eloquent\Collection $resource_group_assignments
 * @property \Illuminate\Database\Eloquent\Collection $resource_groups
 *
 * @package BBS\Models
 */
class ResourceGroup extends Eloquent
{
	protected $primaryKey = 'resource_group_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'parent_id' => 'int'
	];

	protected $fillable = [
		'resource_group_name',
		'parent_id',
		'public_id'
	];

	public function resource_group()
	{
		return $this->belongsTo(\BBS\Models\ResourceGroup::class, 'parent_id');
	}

	public function resource_group_assignments()
	{
		return $this->hasMany(\BBS\Models\ResourceGroupAssignment::class);
	}

	public function resource_groups()
	{
		return $this->hasMany(\BBS\Models\ResourceGroup::class, 'parent_id');
	}
}
