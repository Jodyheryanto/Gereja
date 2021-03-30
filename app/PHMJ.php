<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PHMJ extends Model
{
    protected $table = 'phmj';
	protected $primaryKey = 'id';

	public $incrementing = true;
	public $timestamps = true;
}
