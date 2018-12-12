<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class executives extends Model
{
    protected $table='executives';
    protected $primaryKey='id';
    protected $fillble=['id','name','surname','start_contract','end_contract','salary'];
    
}
