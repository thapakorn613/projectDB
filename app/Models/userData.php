<?php namespace App\Models; // การกำหนดที่อยู่ของ Model




use Illuminate\Database\Eloquent\Model; // การเรียกใช้งาน Eloquent ใน laravel



class userData extends Model {
 
 protected $table = 'users'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้

 protected $primaryKey ='id';

 protected $fillable = [
    'id','name','surname','birthday','blood_group','age','gender','operation_id','patient_type_id','email','name_type','discount','patient_type_id','name_type',];
 

public function getUser(){

    return $this->belongsTo('App\Models\patient_type','patient_type_id','patient_type_id');
}

}
  

