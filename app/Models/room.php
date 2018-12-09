<?php namespace App\Models; // การกำหนดที่อยู่ของ Model




use Illuminate\Database\Eloquent\Model; // การเรียกใช้งาน Eloquent ใน laravel



class room extends Model {
 
 protected $table = 'room'; // กำหนดชื่อของตารางที่ต้องการเรียกใช้

 protected $fillable = [
    'room_id','fee','enter_date','exit_type','room_type',
];
 
}
  

