<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surgeons extends Model
{
    protected $table = 'surgeons';
    protected $primaryKey= 'id';
    protected $fillable =['id','surname','birthday','start_contract','end_contract','salary','fee_per_hour'];
    
    
}
