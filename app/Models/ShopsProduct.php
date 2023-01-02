<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ShopsProduct
 * 
 * @property int $id
 * @property int|null $shop_id
 * @property int|null $product_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Product|null $product
 * @property Shop|null $shop
 *
 * @package App\Models
 */
class ShopsProduct extends Model
{
	protected $table = 'shops_products';

	protected $casts = [
		'shop_id' => 'int',
		'product_id' => 'int'
	];

	protected $fillable = [
		'shop_id',
		'product_id'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function shop()
	{
		return $this->belongsTo(Shop::class);
	}
}
