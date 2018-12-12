<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class finance extends Model
{
    protected $table='finance';
    protected $primaryKey='id';
    protected $fillable=['id','name','surname','start_contract','end_contract','salary'];
    
}
