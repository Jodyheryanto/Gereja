<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tata_Ibadah extends Model
{
    protected $table = 'tata_ibadah';
	protected $primaryKey = 'id';

	public $incrementing = true;
	public $timestamps = true;
}
