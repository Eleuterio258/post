<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $id
 * @property int|null $user_id
 * @property int|null $shop_id
 * @property int|null $delivery_id
 * @property int|null $adress_id
 * @property string|null $payment_type
 * @property float $subtotal
 * @property float $tax
 * @property float $total_price
 * @property string $order_tracking
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Address|null $address
 * @property Delivery|null $delivery
 * @property Shop|null $shop
 * @property User|null $user
 * @property Collection|OrderItem[] $order_items
 * @property Collection|Shop[] $shops
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';

	protected $casts = [
		'user_id' => 'int',
		'shop_id' => 'int',
		'delivery_id' => 'int',
		'adress_id' => 'int',
		'subtotal' => 'float',
		'tax' => 'float',
		'total_price' => 'float'
	];

	protected $fillable = [
		'user_id',
		'shop_id',
		'delivery_id',
		'adress_id',
		'payment_type',
		'subtotal',
		'tax',
		'total_price',
		'order_tracking',
		'status'
	];

	public function address()
	{
		return $this->belongsTo(Address::class, 'adress_id');
	}

	public function delivery()
	{
		return $this->belongsTo(Delivery::class);
	}

	public function shop()
	{
		return $this->belongsTo(Shop::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function order_items()
	{
		return $this->hasMany(OrderItem::class);
	}

	public function shops()
	{
		return $this->belongsToMany(Shop::class, 'order_shops')
					->withPivot('id')
					->withTimestamps();
	}
}
