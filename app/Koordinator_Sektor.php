<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Koordinator_Sektor extends Model
{
    protected $table = 'koordinator_sektor';
	protected $primaryKey = 'id';

	public $incrementing = true;
	public $timestamps = true;
}
