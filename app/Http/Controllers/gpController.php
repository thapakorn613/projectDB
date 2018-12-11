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

}
