<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $table = 'teams';
    protected $fillable = ['name','id_university','supervisor'];
	public $timestamps = true;

	public function getTeamName($id){
		$team = Team::find($id);
		return $team->name;
	}
}
