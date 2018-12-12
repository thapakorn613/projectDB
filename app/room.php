<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $table = 'room';
    protected $primaryKey='room_id';
    protected $fillable=['status','room_id','patient_id','start_contract','end_contract','type_room','type_room','fee'];
}
