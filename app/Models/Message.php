<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Message
 * 
 * @property int $id
 * @property string $message
 * @property int $sender_id
 * @property int $receiver_id
 * @property int $id_chat
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Chat $chat
 * @property User $user
 *
 * @package App\Models
 */
class Message extends Model
{
	protected $table = 'messages';

	protected $casts = [
		'sender_id' => 'int',
		'receiver_id' => 'int',
		'id_chat' => 'int'
	];

	protected $fillable = [
		'message',
		'sender_id',
		'receiver_id',
		'id_chat',
		'status'
	];

	public function chat()
	{
		return $this->belongsTo(Chat::class, 'id_chat');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'receiver_id');
	}
}
