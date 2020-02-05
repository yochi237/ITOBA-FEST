<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    //
    protected $table = 'fileUpload';
    protected $fillable = ['id_team','pathFile'];
	public $timestamps = true;
}
