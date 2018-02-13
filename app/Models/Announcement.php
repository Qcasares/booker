<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Announcement
 * 
 * @property int $announcementid
 * @property string $announcement_text
 * @property int $priority
 * @property \Carbon\Carbon $start_date
 * @property \Carbon\Carbon $end_date
 * 
 * @property \Illuminate\Database\Eloquent\Collection $groups
 * @property \Illuminate\Database\Eloquent\Collection $resources
 *
 * @package BBS\Models
 */
class Announcement extends Eloquent
{
	protected $primaryKey = 'announcementid';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'priority' => 'int'
	];

	protected $dates = [
		'start_date',
		'end_date'
	];

	protected $fillable = [
		'announcement_text',
		'priority',
		'start_date',
		'end_date'
	];

	public function groups()
	{
		return $this->belongsToMany(\BBS\Models\Group::class, 'announcement_groups', 'announcementid');
	}

	public function resources()
	{
		return $this->belongsToMany(\BBS\Models\Resource::class, 'announcement_resources', 'announcementid');
	}
}
