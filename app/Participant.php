<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    //
    protected $table = 'participants';
    protected $fillable = ['name','id_competition','id_team'];
	public $timestamps = true;
}
