<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AnnouncementResource
 * 
 * @property int $announcementid
 * @property int $resource_id
 * 
 * @property \BBS\Models\Announcement $announcement
 * @property \BBS\Models\Resource $resource
 *
 * @package BBS\Models
 */
class AnnouncementResource extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'announcementid' => 'int',
		'resource_id' => 'int'
	];

	public function announcement()
	{
		return $this->belongsTo(\BBS\Models\Announcement::class, 'announcementid');
	}

	public function resource()
	{
		return $this->belongsTo(\BBS\Models\Resource::class);
	}
}
