<?php

namespace App\Http\Controllers;
use App\User;
use App\operation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class gpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showOperation(Request $request)
    {
        $operation = DB::table('operation')->get();
        $patient = DB::table('patient')->get();
        $gp = DB::table('general_practice')->get();
        return view('gp/operation_gp' , ['operation'=> $operation,'patient'=> $patient,'gp'=> $gp]);
    }
    
    public function myPatient(Request $request)
    {
        $patient = DB::table('patient')->get();
        $gp = DB::table('general_practice')->get();
        return view('gp/myPatient' , ['patient'=> $patient,'gp'=> $gp]);
    }

    public function mySchedule(Request $request)
    {
        $schedule = DB::table('schedule')->get();
        $gp = DB::table('general_practice')->get();
        return view('gp/mySchedule' , ['schedule'=> $schedule,'gp'=> $gp]);
    }

    public function addAnes(Request $request)
    {
        $anes = DB::table('anesthetists')->get();
        $operation = DB::table('operation')->get();
        return view('gp/addAnes', ['anes'=> $anes,'operation'=> $operation]);
    }
    public function addSurgeons(Request $request)
    {
        $surgeons = DB::table('surgeons')->get();
        $operation = DB::table('operation')->get();
        return view('gp/addSurgeons', ['surgeons'=> $surgeons,'operation'=> $operation]);
    }
    
    public function addNurse(Request $request)
    {
        $nurse = DB::table('nurse')->get();
        $operation = DB::table('operation')->get();
        return view('gp/addNurse', ['nurse'=> $nurse,'operation'=> $operation]);
    }


}
