<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Image
 * 
 * @property int $id
 * @property string $name
 * @property string $path
 * @property int|null $product_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * @property string|null $size
 * @property string|null $type
 * 
 * @property Product|null $product
 *
 * @package App\Models
 */
class Image extends Model
{
	use SoftDeletes;
	protected $table = 'images';

	protected $casts = [
		'product_id' => 'int'
	];

	protected $fillable = [
		'name',
		'path',
		'product_id',
		'size',
		'type'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
