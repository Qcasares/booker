<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:08:28 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AccountActivation
 * 
 * @property int $account_activation_id
 * @property int $id
 * @property string $activation_code
 * @property \Carbon\Carbon $date_created
 * 
 * @property \BBS\Models\User $user
 *
 * @package BBS\Models
 */
class AccountActivation extends Eloquent
{
	protected $table = 'account_activation';
	protected $primaryKey = 'account_activation_id';
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $dates = [
		'date_created'
	];

	protected $fillable = [
		'id',
		'activation_code',
		'date_created'
	];

	public function user()
	{
		return $this->belongsTo(\BBS\Models\User::class, 'id');
	}
}
