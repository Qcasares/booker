<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Layout
 * 
 * @property int $layout_id
 * @property string $timezone
 * 
 * @property \Illuminate\Database\Eloquent\Collection $schedules
 * @property \Illuminate\Database\Eloquent\Collection $time_blocks
 *
 * @package BBS\Models
 */
class Layout extends Eloquent
{
	protected $primaryKey = 'layout_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $fillable = [
		'timezone'
	];

	public function schedules()
	{
		return $this->hasMany(\BBS\Models\Schedule::class);
	}

	public function time_blocks()
	{
		return $this->hasMany(\BBS\Models\TimeBlock::class);
	}
}
