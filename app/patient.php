<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    protected $table='patient';
    protected $primaryKey='id';
    protected $fillable=['id','name','surname','gp_id','birthdate','blood_group','age','gender','operation_id','patient_type_id'];
}
