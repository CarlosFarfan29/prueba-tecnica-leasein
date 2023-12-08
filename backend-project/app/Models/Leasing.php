<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Leasing
 * 
 * @property int $id
 * @property int $company_id
 * @property int $adviser_id
 * @property int $equipment_id
 * @property Carbon $start_date
 * @property Carbon $end_date
 * 
 * @property Company $company
 * @property Adviser $adviser
 * @property Equipment $equipment
 *
 * @package App\Models
 */
class Leasing extends Model
{
	protected $table = 'leasings';
	public $timestamps = false;

	protected $casts = [
		'company_id' => 'int',
		'adviser_id' => 'int',
		'equipment_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime'
	];

	protected $fillable = [
		'company_id',
		'adviser_id',
		'equipment_id',
		'start_date',
		'end_date'
	];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function adviser()
	{
		return $this->belongsTo(Adviser::class);
	}

	public function equipment()
	{
		return $this->belongsTo(Equipment::class, 'equipment_id');
	}
}
