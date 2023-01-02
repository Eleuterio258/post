<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AdonisSchemaVersion
 * 
 * @property int $version
 *
 * @package App\Models
 */
class AdonisSchemaVersion extends Model
{
	protected $table = 'adonis_schema_versions';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'version' => 'int'
	];

	protected $fillable = [
		'version'
	];
}
