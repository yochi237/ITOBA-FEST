<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    //
    protected $table = 'seminars';
    protected $fillable = ['id','name','institution','email', 'category'];
	public $timestamps = true;
}
