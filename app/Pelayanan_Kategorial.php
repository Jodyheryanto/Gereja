<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelayanan_Kategorial extends Model
{
    protected $table = 'pelayanan_kategorial';
	protected $primaryKey = 'id';

	public $incrementing = true;
	public $timestamps = true;
}
