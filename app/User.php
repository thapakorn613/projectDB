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
        'id','name','surname','birthday','blood_group','age','gender','patient_type_id', 'email', 'password','typeID',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function id()
	{
		return $this->id; // this looks for an is_admin column in your users table
    }
    public function isAdmin()
	{
		return $this->is_admin; // this looks for an is_admin column in your users table
    }
    public function patientID()
	{
		return $this->patientID; // this looks for an is_admin column in your users table
    }
    public function typeID()
	{
		return $this->typeID; // this looks for an is_admin column in your users table
    }
    
    public function patient_type(){
        return $this->belongsTo('App\patient_type','patient_type_id','patient_type_id');
    }

    public function operation(){
        return $this->hasOne('App\operation','operation_id','operation_id');
    }

    public function general_practice(){
        return $this->belongsTo('App\general_practice','id','id');
    }

    public function presciption(){
        return $this->hasMany('App\presciption','patient_id','id');
    }

    public function room(){
        return $this->hasOne('App\room','patient_id','id');
    }
}