<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class migrations extends Model
{
    protected $tabel='migration';
    protected $primaryKey='id';
    protected $fillable=['id','migration','batch'];
    
}
