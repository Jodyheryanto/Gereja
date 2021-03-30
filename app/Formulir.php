<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    protected $table = 'formulir';
	protected $primaryKey = 'id';

	public $incrementing = true;
	public $timestamps = true;
}
