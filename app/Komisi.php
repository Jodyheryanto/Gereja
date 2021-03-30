<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komisi extends Model
{
    protected $table = 'komisi';
	protected $primaryKey = 'id';

	public $incrementing = true;
	public $timestamps = true;
}
