<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $id
 * @property int|null $shop_id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $icon
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Shop|null $shop
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'categories';

	protected $casts = [
		'shop_id' => 'int'
	];

	protected $fillable = [
		'shop_id',
		'name',
		'description',
		'image',
		'icon',
		'status'
	];

	public function shop()
	{
		return $this->belongsTo(Shop::class);
	}

	public function products()
	{
		return $this->hasMany(Product::class);
	}
}
