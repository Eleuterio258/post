<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Shop
 * 
 * @property int $id
 * @property int|null $user_id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $logo
 * @property string $description
 * @property string $latitude
 * @property string $longitude
 * @property string $reference
 * @property string $status
 * @property string $online
 * @property Carbon|null $updated_at
 * 
 * @property User|null $user
 * @property Collection|Category[] $categories
 * @property Collection|Order[] $orders
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class Shop extends Model
{
	protected $table = 'shops';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'name',
		'phone',
		'email',
		'logo',
		'description',
		'latitude',
		'longitude',
		'reference',
		'status',
		'online'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function categories()
	{
		return $this->hasMany(Category::class);
	}

	public function orders()
	{
		return $this->hasMany(Order::class);
	}

	public function products()
	{
		return $this->belongsToMany(Product::class, 'shops_products')
					->withPivot('id')
					->withTimestamps();
	}
}
