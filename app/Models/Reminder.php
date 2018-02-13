<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:08:28 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Reminder
 * 
 * @property int $reminder_id
 * @property int $id
 * @property string $address
 * @property string $message
 * @property \Carbon\Carbon $sendtime
 * @property string $refnumber
 * 
 * @property \BBS\Models\User $user
 *
 * @package BBS\Models
 */
class Reminder extends Eloquent
{
	protected $primaryKey = 'reminder_id';
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $dates = [
		'sendtime'
	];

	protected $fillable = [
		'id',
		'address',
		'message',
		'sendtime',
		'refnumber'
	];

	public function user()
	{
		return $this->belongsTo(\BBS\Models\User::class, 'id');
	}
}
