<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendeta_Jemaat extends Model
{
    protected $table = 'pendeta_jemaat';
	protected $primaryKey = 'id';

	public $incrementing = true;
	public $timestamps = true;
}
