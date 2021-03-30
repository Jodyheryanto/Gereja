<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MajelisJemaat extends Model
{
    protected $table = 'majelis_jemaat';
	protected $primaryKey = 'id';

	public $incrementing = true;
	public $timestamps = true;
}
