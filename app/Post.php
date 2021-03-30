<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'data_post';
	protected $primaryKey = 'id';

	public $incrementing = true;
	public $timestamps = true;
}
