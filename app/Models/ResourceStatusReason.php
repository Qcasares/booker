<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ResourceStatusReason
 * 
 * @property int $resource_status_reason_id
 * @property int $status_id
 * @property string $description
 * 
 * @property \Illuminate\Database\Eloquent\Collection $resources
 *
 * @package BBS\Models
 */
class ResourceStatusReason extends Eloquent
{
	protected $primaryKey = 'resource_status_reason_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'status_id' => 'int'
	];

	protected $fillable = [
		'status_id',
		'description'
	];

	public function resources()
	{
		return $this->hasMany(\BBS\Models\Resource::class);
	}
}
