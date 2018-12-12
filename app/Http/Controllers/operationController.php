<?php

namespace App\Http\Controllers;
use App\operation;
use Illuminate\Http\Request;

class operationController extends Controller
{

  //  public function index()
   // {
       // $operation = operation::all()->toArray();
       
   // }

   public function index(){
        $operation = operation::get();
    }

    public function getIndex(){
        $operation = operation::get();
        return $operation;
    }
     
    public function operationShow($id){
        $operation = operation::where('operation_id',$id)->first();
        return view('operation' ,compact('operation'));
    }
}
