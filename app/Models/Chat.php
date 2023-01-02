<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Chat
 * 
 * @property int $id
 * @property int $sender_id
 * @property int $receiver_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 * @property Collection|Message[] $messages
 *
 * @package App\Models
 */
class Chat extends Model
{
	protected $table = 'chats';

	protected $casts = [
		'sender_id' => 'int',
		'receiver_id' => 'int'
	];

	protected $fillable = [
		'sender_id',
		'receiver_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'receiver_id');
	}

	public function messages()
	{
		return $this->hasMany(Message::class, 'id_chat');
	}
}
