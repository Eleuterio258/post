<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Slider
 * 
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Slider extends Model
{
	use SoftDeletes;
	protected $table = 'sliders';

	protected $fillable = [
		'image',
		'name',
		'status'
	];
}
