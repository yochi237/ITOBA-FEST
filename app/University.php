<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    //
    protected $table = 'universities';
    protected $fillable = ['name','address'];
	public $timestamps = true;
}
