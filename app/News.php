<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'data_news';
	protected $primaryKey = 'id';

	public $incrementing = true;
	public $timestamps = true;
}
