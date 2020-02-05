<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    //protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','email', 'password','verified','email_token', 'id_team'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Create a new user instance after a valid registration with a random email token
     *
     * @param  array  $data
     * @return User
     */
   
    public function verified()
    {

        $this->verified = 1;
        $this->email_token = null;
        $this->save();
        
    }
}
