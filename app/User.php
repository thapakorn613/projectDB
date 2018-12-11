<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $primaryKey= 'id';
    protected $fillable = [
        'name','surname','birthday','blood_group','age','gender','patient_type_id', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
	{
		return $this->is_admin; // this looks for an is_admin column in your users table
    }
    
    public function patient_type(){
        return $this->belongsTo('App\patient_type','patient_type_id','patient_type_id');
    }
}