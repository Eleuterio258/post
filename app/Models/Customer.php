<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * 
 * @property int $id
 * @property int|null $user_id
 * @property string $phone
 * @property string $midlename
 * @property string $fname
 * @property string $lname
 * @property string $image
 * @property Carbon|null $updated_at
 * 
 * @property User|null $user
 * @property Collection|Address[] $addresses
 *
 * @package App\Models
 */
class Customer extends Model
{
	protected $table = 'customers';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'phone',
		'midlename',
		'fname',
		'lname',
		'image'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function addresses()
	{
		return $this->hasMany(Address::class);
	}
}
