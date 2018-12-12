<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showData(Request $request)
    {
        $userMain = User::find($user->id);
        $patient_type=$userMain->patient_type()->get()->first();
        return view('me' ,compact('user','patient_type'));
    }

}
