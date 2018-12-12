<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class general_practice extends Model
{
    protected $table='general_practice';
    protected $primaryKey='id';
    protected $fillable=['id','name','surname','patient_id','start_contract','end_contract','salary','fee_per_hour'];
    
}
