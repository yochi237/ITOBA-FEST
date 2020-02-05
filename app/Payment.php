<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $table = 'payments';
    protected $fillable = ['id_team','evidence'];
	public $timestamps = true;
}
