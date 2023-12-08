<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipment
 * 
 * @property int $id
 * @property string $cod
 * @property string $UA_type
 * @property string $mark
 * @property string $processor
 * @property int $generation
 * 
 * @property Collection|Leasing[] $leasings
 *
 * @package App\Models
 */
class Equipment extends Model
{
	protected $table = 'equipment';
	public $timestamps = false;

	protected $casts = [
		'generation' => 'int'
	];

	protected $fillable = [
		'cod',
		'UA_type',
		'mark',
		'processor',
		'generation'
	];

	public function leasings()
	{
		return $this->hasMany(Leasing::class);
	}
}
