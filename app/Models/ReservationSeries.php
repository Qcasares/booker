<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 12 Feb 2018 19:48:02 +0000.
 */

namespace BBS\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ReservationSeries
 * 
 * @property int $series_id
 * @property \Carbon\Carbon $date_created
 * @property \Carbon\Carbon $last_modified
 * @property string $title
 * @property string $description
 * @property bool $allow_participation
 * @property bool $allow_anon_participation
 * @property int $type_id
 * @property int $status_id
 * @property string $repeat_type
 * @property string $repeat_options
 * @property int $owner_id
 * @property string $legacyid
 * @property int $last_action_by
 * 
 * @property \BBS\Models\User $user
 * @property \BBS\Models\ReservationStatus $reservation_status
 * @property \BBS\Models\ReservationType $reservation_type
 * @property \Illuminate\Database\Eloquent\Collection $reservation_accessories
 * @property \Illuminate\Database\Eloquent\Collection $reservation_files
 * @property \Illuminate\Database\Eloquent\Collection $reservation_instances
 * @property \Illuminate\Database\Eloquent\Collection $reservation_reminders
 * @property \Illuminate\Database\Eloquent\Collection $reservation_resources
 *
 * @package BBS\Models
 */
class ReservationSeries extends Eloquent
{
	protected $primaryKey = 'series_id';
	public $timestamps = false;
	protected $dateFormat = 'd-m-Y H:i:s';

	protected $casts = [
		'allow_participation' => 'bool',
		'allow_anon_participation' => 'bool',
		'type_id' => 'int',
		'status_id' => 'int',
		'owner_id' => 'int',
		'last_action_by' => 'int'
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
		'allow_participation',
		'allow_anon_participation',
		'type_id',
		'status_id',
		'repeat_type',
		'repeat_options',
		'owner_id',
		'legacyid',
		'last_action_by'
	];

	public function user()
	{
		return $this->belongsTo(\BBS\Models\User::class, 'owner_id');
	}

	public function reservation_status()
	{
		return $this->belongsTo(\BBS\Models\ReservationStatus::class, 'status_id');
	}

	public function reservation_type()
	{
		return $this->belongsTo(\BBS\Models\ReservationType::class, 'type_id');
	}

	public function reservation_accessories()
	{
		return $this->hasMany(\BBS\Models\ReservationAccessory::class, 'series_id');
	}

	public function reservation_files()
	{
		return $this->hasMany(\BBS\Models\ReservationFile::class, 'series_id');
	}

	public function reservation_instances()
	{
		return $this->hasMany(\BBS\Models\ReservationInstance::class, 'series_id');
	}

	public function reservation_reminders()
	{
		return $this->hasMany(\BBS\Models\ReservationReminder::class, 'series_id');
	}

	public function reservation_resources()
	{
		return $this->hasMany(\BBS\Models\ReservationResource::class, 'series_id');
	}
}
