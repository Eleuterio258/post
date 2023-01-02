<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 *
 * @property int $id
 * @property int|null $category_id
 * @property string $name
 * @property string $description
 * @property float|null $rating
 * @property bool $is_new
 * @property bool $is_hot
 * @property float $price
 * @property float $discount
 * @property float|null $old_price
 * @property int $stock
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 *
 * @property Category|null $category
 * @property Collection|Cart[] $carts
 * @property Collection|Image[] $images
 * @property Collection|OrderItem[] $order_items
 * @property Collection|Shop[] $shops
 * @property Collection|Wishlist[] $wishlists
 *
 * @package App\Models
 */
class Product extends Model
{
	use SoftDeletes;
	protected $table = 'products';

	protected $casts = [
		'category_id' => 'int',
		'rating' => 'float',
		'is_new' => 'bool',
		'is_hot' => 'bool',
		'price' => 'float',
		'discount' => 'float',
		'old_price' => 'float',
		'stock' => 'int'
	];

	protected $fillable = [
		'category_id',
		'name',
		'description',
		'rating',
		'is_new',
		'is_hot',
		'price',
		'discount',
		'old_price',
		'stock',
		'status'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function carts()
	{
		return $this->hasMany(Cart::class);
	}

	public function images()
	{
		return $this->hasMany(Image::class);
	}

	public function order_items()
	{
		return $this->hasMany(OrderItem::class);
	}

	public function shops()
	{
		return $this->belongsToMany(Shop::class, 'shops_products')
					->withPivot('id')
					->withTimestamps();
	}

	public function wishlists()
	{
		return $this->hasMany(Wishlist::class);
	}
}
