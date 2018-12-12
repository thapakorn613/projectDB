<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    
    protected $table = 'users'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้

    protected $primaryKey ='id';
   
    protected $fillable = [
       'id','name','surname','birthday','blood_group','age','gender','operation_id','patient_type_id','email','name_type','discount','patient_type_id','name_type',];
    
   
   public function get_patient_type(){
   
       return $this->belongsTo('App\Models\patient_type','patient_type_id','patient_type_id');
   }
}

