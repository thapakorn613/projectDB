<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class operation extends Model
{
    protected $table='operation';
    protected $primaryKey='operation_id';
    protected $fillable=['operation_id','operation_room_id','fee','id_user','id_anes','id_surgeons','id_nurse'];
}
