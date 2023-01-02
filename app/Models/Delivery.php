<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Delivery
 * 
 * @property int $id
 * @property int|null $user_id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $documentation
 * @property string $profile_image
 * @property Carbon|null $updated_at
 * 
 * @property User|null $user
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class Delivery extends Model
{
	protected $table = 'deliveries';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'name',
		'phone',
		'email',
		'documentation',
		'profile_image'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function orders()
	{
		return $this->hasMany(Order::class);
	}
}
