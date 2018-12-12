<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anesthetists extends Model
{
    protected $table = 'anesthetists';
    protected $primaryKey='id';
    protected $fillable=['id','name','surname','start_contract','end_contract','salary','fee_per_hour'];
}
