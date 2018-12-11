<?php namespace App\Models; // การกำหนดที่อยู่ของ Model




use Illuminate\Database\Eloquent\Model; // การเรียกใช้งาน Eloquent ใน laravel



class patient_type extends Model {
 
 protected $table = 'patient_type'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้

 protected $fillable = [
    'patient_type_id','name_type','discount',
];
 

}
  

