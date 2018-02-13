<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AnnouncementGroup
 * 
 * @property int $announcementid
 * @property int $group_id
 * 
 * @property \BBS\Models\Announcement $announcement
 * @property \BBS\Models\Group $group
 *
 * @package BBS\Models
 */
class AnnouncementGroup extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'announcementid' => 'int',
		'group_id' => 'int'
	];

	public function announcement()
	{
		return $this->belongsTo(\BBS\Models\Announcement::class, 'announcementid');
	}

	public function group()
	{
		return $this->belongsTo(\BBS\Models\Group::class);
	}
}
