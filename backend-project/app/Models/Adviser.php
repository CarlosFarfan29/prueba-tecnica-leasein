<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Adviser
 * 
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $email
 * @property string $cellphone
 * 
 * @property Collection|Leasing[] $leasings
 *
 * @package App\Models
 */
class Adviser extends Model
{
	protected $table = 'advisers';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'surname',
		'email',
		'cellphone'
	];

	public function leasings()
	{
		return $this->hasMany(Leasing::class);
	}
}
