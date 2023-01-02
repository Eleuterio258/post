<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderShop
 * 
 * @property int $id
 * @property int|null $shop_id
 * @property int|null $order_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Order|null $order
 * @property Shop|null $shop
 *
 * @package App\Models
 */
class OrderShop extends Model
{
	protected $table = 'order_shops';

	protected $casts = [
		'shop_id' => 'int',
		'order_id' => 'int'
	];

	protected $fillable = [
		'shop_id',
		'order_id'
	];

	public function order()
	{
		return $this->belongsTo(Order::class);
	}

	public function shop()
	{
		return $this->belongsTo(Shop::class);
	}
}
