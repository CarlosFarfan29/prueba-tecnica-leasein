<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Report
 * 
 * @property string $cod
 * @property string $UA_type
 * @property string $mark
 * @property string $processor
 * @property int $generation
 * @property string $name_company
 * @property string $name_adviser
 *
 * @package App\Models
 */
class Report extends Model
{
	protected $table = 'reports';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'generation' => 'int'
	];

	protected $fillable = [
		'cod',
		'UA_type',
		'mark',
		'processor',
		'generation',
		'name_company',
		'name_adviser'
	];
}
