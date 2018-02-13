<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Dbversion
 * 
 * @property float $version_number
 * @property \Carbon\Carbon $version_date
 *
 * @package BBS\Models
 */
class Dbversion extends Eloquent
{
	protected $table = 'dbversion';
	public $incrementing = false;
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'version_number' => 'float'
	];

	protected $dates = [
		'version_date'
	];

	protected $fillable = [
		'version_number',
		'version_date'
	];
}
