<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BlackoutSeries
 * 
 * @property int $blackout_series_id
 * @property \Carbon\Carbon $date_created
 * @property \Carbon\Carbon $last_modified
 * @property string $title
 * @property string $description
 * @property int $owner_id
 * @property string $legacyid
 * @property string $repeat_type
 * @property string $repeat_options
 * 
 * @property \Illuminate\Database\Eloquent\Collection $blackout_instances
 * @property \Illuminate\Database\Eloquent\Collection $resources
 *
 * @package BBS\Models
 */
class BlackoutSeries extends Eloquent
{
	protected $primaryKey = 'blackout_series_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'owner_id' => 'int'
	];

	protected $dates = [
		'date_created',
		'last_modified'
	];

	protected $fillable = [
		'date_created',
		'last_modified',
		'title',
		'description',
		'owner_id',
		'legacyid',
		'repeat_type',
		'repeat_options'
	];

	public function blackout_instances()
	{
		return $this->hasMany(\BBS\Models\BlackoutInstance::class);
	}

	public function resources()
	{
		return $this->belongsToMany(\BBS\Models\Resource::class, 'blackout_series_resources');
	}
}
