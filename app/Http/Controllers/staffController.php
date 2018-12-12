<?php

namespace App\Http\Controllers;
use App\User;
use App\operation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class staffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function operation_Anesthetists(Request $request)
    {
        $operation = DB::table('operation')->get();
        $anes = DB::table('anesthetists')->get();
        $patient = DB::table('patient')->get();
        return view('anotherStaff/operation_anesthetists' , ['operation'=> $operation,'anes'=> $anes,'patient'=> $patient]);
    }
    
    public function operation_Nurse(Request $request)
    {
        $operation = DB::table('operation')->get();
        $nurse = DB::table('nurse')->get();
        $patient = DB::table('patient')->get();
        return view('anotherStaff/operation_nurse' , ['operation'=> $operation,'nurse'=> $nurse,'patient'=> $patient]);
    }

    public function operation_Surgeons(Request $request)
    {
        $operation = DB::table('operation')->get();
        $surgeons = DB::table('surgeons')->get();
        $patient = DB::table('patient')->get();
        return view('anotherStaff/operation_surgeons' , ['operation'=> $operation,'surgeons'=> $surgeons,'patient'=> $patient]);
    }


}
