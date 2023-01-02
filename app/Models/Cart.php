<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cart
 * 
 * @property int $id
 * @property int|null $user_id
 * @property int|null $product_id
 * @property int $quantity
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $deleted_at
 * 
 * @property Product|null $product
 * @property User|null $user
 *
 * @package App\Models
 */
class Cart extends Model
{
	use SoftDeletes;
	protected $table = 'carts';

	protected $casts = [
		'user_id' => 'int',
		'product_id' => 'int',
		'quantity' => 'int'
	];

	protected $fillable = [
		'user_id',
		'product_id',
		'quantity'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
