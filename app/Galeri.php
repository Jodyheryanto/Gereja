<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';
	protected $primaryKey = 'id';

	public $incrementing = true;
	public $timestamps = false;
}
