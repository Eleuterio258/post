<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 * 
 * @property int $id
 * @property int|null $customer_id
 * @property string|null $address
 * @property string|null $postalcode
 * @property string|null $pronvice
 * @property string|null $district
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $reference
 * @property string|null $type
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Customer|null $customer
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class Address extends Model
{
	protected $table = 'addresses';

	protected $casts = [
		'customer_id' => 'int'
	];

	protected $fillable = [
		'customer_id',
		'address',
		'postalcode',
		'pronvice',
		'district',
		'latitude',
		'longitude',
		'reference',
		'type'
	];

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function orders()
	{
		return $this->hasMany(Order::class, 'adress_id');
	}
}
