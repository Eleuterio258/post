<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'posts';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'userId',
		'title',
		'body'
	];
}
