<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    //
    protected $table = 'competitions';
    protected $fillable = ['name','year'];
	public $timestamps = true;
}
