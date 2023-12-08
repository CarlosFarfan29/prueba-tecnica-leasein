<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 * 
 * @property int $id
 * @property string $name
 * @property string $ruc
 * @property string $sector
 * @property string $size
 * @property string $address
 * @property string $email
 * @property bool $estado
 * 
 * @property Collection|Leasing[] $leasings
 *
 * @package App\Models
 */
class Company extends Model
{
	protected $table = 'companies';
	public $timestamps = false;

	protected $casts = [
		'estado' => 'bool'
	];

	protected $fillable = [
		'name',
		'ruc',
		'sector',
		'size',
		'address',
		'email',
		'estado'
	];

	public function leasings()
	{
		return $this->hasMany(Leasing::class);
	}
}
