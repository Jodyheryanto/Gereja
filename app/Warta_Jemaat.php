<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warta_Jemaat extends Model
{
    protected $table = 'warta_jemaat';
	protected $primaryKey = 'id';

	public $incrementing = true;
	public $timestamps = true;
}
