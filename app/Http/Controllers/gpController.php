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

        $asd =  auth()->User('name');
        
        $user = DB::table('general_practice')->where('userID', $asd->id)->first();
        $room = DB::table('room')->get();
        $patient = DB::table('patient')->where('gp_id', $user->id)->first();

        
        if($patient->operation_id == null)
        {
            return view('gp/create' , ['user'=> $room]);
        }
        

    




        $operation = DB::table('operation')->where('id_user', $patient->id)->first();
        
        
        return view('gp/operation_gp' , ['operation'=> $operation,'patient'=> $patient,'gp'=> $user]);
    }


    public function create(Request $request)
        {
            $asd =  auth()->User('name');
        
        $user = DB::table('general_practice')->where('userID', $asd->id)->first();
        $room = DB::table('room')->get();
        $patient = DB::table('patient')->where('gp_id', $user->id)->first();


        $numroom =$request->get('room');
        $fee = $request->get('fee');
        $hour = $request->get('hour');

        DB::table('operation')->insert(
            ['operation_room_id' => $numroom, 'fee' => $fee, 'numOfHour' => $hour, 'id_user' => $patient->id]
        );
        $operation = DB::table('operation')->where('id_user', $patient->id)->first();
        DB::table('patient')
        ->where('id',  $patient->id)
        ->update(['operation_id' =>$operation->operation_id]);

       
        $operation = DB::table('operation')->where('id_user', $patient->id)->first();
        
        
        return view('gp/operation_gp' , ['operation'=> $operation,'patient'=> $patient,'gp'=> $user]);
      



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


    public function addfirst(Request $request,$id)
    {
        $anes = DB::table('anesthetists')->where('id', $id)->first();

        $asd =  auth()->User('name');
        
        $user = DB::table('general_practice')->where('userID', $asd->id)->first();
        $patient = DB::table('patient')->where('gp_id', $user->id)->first();
       

        DB::table('operation')
        ->where('operation_id',  $patient->operation_id)
        ->update(['id_anes' => $anes->id]);

       
        

        $operation = DB::table('operation')->where('id_user', $patient->id)->first();
        
        
        return view('gp/operation_gp' , ['operation'=> $operation,'patient'=> $patient,'gp'=> $user]);
       
    }

    public function addsecond(Request $request,$id)
    {
        $anes = DB::table('surgeons')->where('id', $id)->first();

        $asd =  auth()->User('name');
        
        $user = DB::table('general_practice')->where('userID', $asd->id)->first();
        $patient = DB::table('patient')->where('gp_id', $user->id)->first();
       

        DB::table('operation')
        ->where('operation_id',  $patient->operation_id)
        ->update(['id_surgeons' => $anes->id]);

        $operation = DB::table('operation')->where('id_user', $patient->id)->first();
        
        
        return view('gp/operation_gp' , ['operation'=> $operation,'patient'=> $patient,'gp'=> $user]);
    }

    public function addth(Request $request,$id)
    {
        $anes = DB::table('nurse')->where('id', $id)->first();

        $asd =  auth()->User('name');
        
        $user = DB::table('general_practice')->where('userID', $asd->id)->first();
        $patient = DB::table('patient')->where('gp_id', $user->id)->first();
       

        DB::table('operation')
        ->where('operation_id',  $patient->operation_id)
        ->update(['id_nurse' => $anes->id]);

        $operation = DB::table('operation')->where('id_user', $patient->id)->first();
        
        
        return view('gp/operation_gp' , ['operation'=> $operation,'patient'=> $patient,'gp'=> $user]);
    }

}
