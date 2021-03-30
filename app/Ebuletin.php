<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ebuletin extends Model
{
    protected $table = 'ebuletin';
	protected $primaryKey = 'id';

	public $incrementing = true;
	public $timestamps = false;
}
