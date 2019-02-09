<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
	protected $fillable = [
		'title',
		'body',
		'user_id',
		'category_id',
		'order',
		'excerpt',
		'slug',	
	];
}
