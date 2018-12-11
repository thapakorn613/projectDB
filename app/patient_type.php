<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_type extends Model
{
    protected $table = 'patient_type'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้
    protected $fillable = [
       'patient_type_id','name_type','discount',
   ];
   public function User(){
       return $this->hasMany('App/users','patient_type','patient_type');
   }

}
