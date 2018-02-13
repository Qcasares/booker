<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TimeBlock
 * 
 * @property int $block_id
 * @property string $label
 * @property string $end_label
 * @property int $availability_code
 * @property int $layout_id
 * @property \Carbon\Carbon $start_time
 * @property \Carbon\Carbon $end_time
 * @property int $day_of_week
 * 
 * @property \BBS\Models\Layout $layout
 *
 * @package BBS\Models
 */
class TimeBlock extends Eloquent
{
	protected $primaryKey = 'block_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'availability_code' => 'int',
		'layout_id' => 'int',
		'day_of_week' => 'int'
	];

	protected $dates = [
		'start_time',
		'end_time'
	];

	protected $fillable = [
		'label',
		'end_label',
		'availability_code',
		'layout_id',
		'start_time',
		'end_time',
		'day_of_week'
	];

	public function layout()
	{
		return $this->belongsTo(\BBS\Models\Layout::class);
	}
}
