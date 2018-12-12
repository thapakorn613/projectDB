<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class presciption extends Model
{
    protected $table='presciption';
    protected $primaryKey ='patient_id';
    protected $fillable=['patient_id','presciption_id','operation_price','room_price','discount','price'];
}
