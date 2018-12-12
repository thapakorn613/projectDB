<?php namespace App\Http\Controllers; //กำหนดที่อยู่ ของ Controller ที่เรียกใช้งาน


use App\Models\room;
use App\User;


class RoomController extends Controller {
    public function getIndex(){
      header('content-type:text/html; charset=utf-8');
      $room = room::get();
      return $room ? 'Model Profile Connect Yes!' : 'Error! Model Profile Connect False!!!';
 }

 public function searchroom($id){
      $room = room::get();
      $room->delete();
      $users = User::all()->toArray();
      return view('index' , compact('users'));
  }
   



}