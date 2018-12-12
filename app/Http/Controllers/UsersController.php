<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;



class UsersController extends Controller
{
    private $me ;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index(Request $request,$id)
    {
       
        $users = DB::table('users')->get();
        if($id==1){
            return view('admin.patient' ,['users' => $users]);
        }
        if($id==2){
            return view('admin.student' , ['users' => $users]);
        }
        if($id==3){
            return view('admin.gp' , ['users' => $users]);
        }
        if($id==4){
            return view('admin.sergeon' , ['users' => $users]);
        }
        if($id==5){
            return view('admin.admin' , ['users' => $users]);
        }
    }

    public function meet(){
        $gp = DB::table('general_practice')->get();
        return view('meet' ,['gp' => $gp]);
    }

    public function addmeet(Request $request)
    {
        $doctor =$request->get('doctor');
        $date = $request->get('date');
        $time = $request->get('time');
         $asd =  auth()->User('name');
        $user = User::find($asd->id);
        $gp =  DB::table('general_practice')->where('id', $doctor)->first();
       // $gp = $user->general_practice()->get()->first();
       

        $check =  DB::table('schedule')->where('patient_id', $user->id)->first();
        

        $check2 =  DB::table('schedule')->where('gp_id', $doctor)->where('time_fix' , $date)->where('time' , $time)->first();


        $now = date("Y-m-d", time());
                $datetime1 = new DateTime($date);
                $datetime2 = new DateTime($now);
                $interval = $datetime2->diff($datetime1);
                $days = $interval->format('%R');

        echo $days;
        if($check2!=null || $days == "-")
        {
            $gp = DB::table('general_practice')->get();
      
            return view('meet' ,['gp' => $gp]);
        }
        if($check==null)
        {
            DB::table('schedule')->insert(
            ['patient_id' => $user->id, 'gp_id' => $doctor, 'time_fix' => $date,  'time' =>  $time]
               );
        }
        else{
            $gp = DB::table('general_practice')->get();
      
            return view('meet' ,['gp' => $gp]);
        }
        
        $patient_type=$user->patient_type()->get()->first();
                return view('me' ,compact('user','patient_type'));
    }

    public function login(Request $request)
    {
        
        $users = DB::table('users')->get();
        
        foreach ($users as $eiei) {
          
            if($eiei->email == $request->get('email') &&password_verify($request->get('password'), $eiei->password)  )
            {  
                
                $this->me = $eiei->id;
                
                $user = User::find($this->me);
                
                $patient_type=$user->patient_type()->get()->first();
                return view('me' ,compact('user','patient_type'));
            }
        }
        return view('auth/login');
        //$user = User::find($request->get('email'));
        
        //return view('me');

    }

    public function printciple(Request $request,$id)
    {

        $asd =  auth()->User('name');
        $user = User::find($asd->id);
        
        

       

       // $price = DB::table('presciption')->where('patient_id', $user->id)->first();
        //return $user->presciption()->get()->first()->operation_price;
        $price = $user->presciption()->get()->first();
            if( $price == null )
            {
                $patient_type=$user->patient_type()->get()->first();
                return view('me' ,compact('user','patient_type'));
                 
            }
       
         //$room = DB::table('room')->where('patient_id', $user->id)->first();
         $room = $user->room()->get()->first();
            if( $room != null )
            {
                $time = date("Y-m-d", time());
                $datetime1 = new DateTime($room->start_contract);
                $datetime2 = new DateTime($room->end_contract);
                $interval = $datetime1->diff($datetime2);
                $days = $interval->format('%a');
                
                 
                $total = $days * $room->fee;
                
                DB::table('presciption')
                ->where('patient_id', $user->id)
                ->update(['room_price' => $total]);
            }
         //$operation = DB::table('operation')->where('operation_id', $user->operation_id)->first();
          $operation = $user->operation()->get()->first();
            if( $operation != null )
            {
                DB::table('presciption')
                ->where('patient_id', $user->id)
                ->update(['operation_price' => $operation->fee]);
                
            }
       
        $total = $price->room_price + $price->operation_price ;
       if($user->patient_type_id==2)
       {
            $discount = $total * 0.15;
            DB::table('presciption')
                ->where('patient_id', $user->id)
                ->update(['discount' => $discount]);
                
       }
       $total = $total -  $price->discount;
        
        DB::table('presciption')
                ->where('patient_id', $user->id)
                ->update(['price' => $total]);
      

     // $price = DB::table('presciption')->where('patient_id', $user->id)->first();
       $price = $user->presciption()->get()->first();
       return view('price' ,['price' => $price]);
        

    }

    public function adddoctor(Request $request)
    {

        $users = DB::table('general_practice')->get();
        $asd =  auth()->User('name');
        $user = User::find($asd->id);
    
        $check = DB::table('general_practice')->where('patient_id', $user->id)->first();
        if($check!=null)
        {
            return view('showdoctor' ,['i' => $check]);
        }
        
        
        
        return view('adddoctor' ,['users' => $users]);
        

    }

    public function cancelroom(Request $request,$id)
    {
        $asd =  auth()->User('name');
        $user = User::find($asd->id);
        $price =  DB::table('presciption')->get();

        //$price = DB::table('presciption')->where('patient_id', $user->id)->first();
        $price = $user->presciption()->get()->first();
            if( $price != null )
            {
                DB::table('presciption')->where('patient_id',$user->id )->delete();
                 
            }
       


        DB::table('room')
        ->where('room_id', $id)
        ->update(['patient_id' => null]);
        
        DB::table('room')
            ->where('room_id', $id)
            ->update(['status' =>"idle"]);

        
        
            $asd =  auth()->User('name');
            $user = User::find($asd->id);
        
            $patient_type=$user->patient_type()->get()->first();
        return view('me' ,compact('user','patient_type'));
    }

    public function addrestroom(Request $request)
    {
        $asd =  auth()->User('name');
        $user = User::find($asd->id);
        $room = DB::table('room')->get();

        $check = DB::table('room')->where('patient_id', $user->id)->first();
        if($check!=null)
        {
            return view('showroom' ,['i' => $check]);
        }
        

        $user = DB::table('users')->get();
        return view('addrestroom' ,['room' => $room],['user' => $user]);
        
       
       

    }

    public function updateroom(Request $request)
    {
       
        


        $patient =$request->get('name');
        $room = $request->get('room');
        $date = $request->get('date');
        $user = User::find($patient);
       

       // echo $patient;

        //$price = DB::table('presciption')->where('patient_id', $user->id)->first();
        $price = $user->presciption()->get()->first();
        if( $price == null )
        {
            DB::table('presciption')->insert(
                ['patient_id' => $user->id, 'operation_price' => 0, 'room_price' => 0, 'discount' => 0, 'price' => 0]
            );
             
        }

        $check = DB::table('room')->where('patient_id', $user->id)->first();
        if($check!=null)
        {
            $room = DB::table('room')->get();
            $user = DB::table('users')->get();
        return view('addrestroom' ,['room' => $room],['user' => $user]);
        }

        DB::table('room')
            ->where('room_id', $room)
            ->update(['status' => "busy"]);
        
       
           
        DB::table('room')
            ->where('room_id',$room)
            ->update(['patient_id' => $user->id]);

         $time = date("Y-m-d", time());
        DB::table('room')
            ->where('room_id', $room)
            ->update(['start_contract' =>$time]);

            DB::table('room')
            ->where('room_id', $room)
            ->update(['end_contract' =>$date]);

            $asd =  auth()->User('name');
            $user = User::find($asd->id);
            $patient_type = DB::table('patient_type')->where('patient_type_id', $user->patient_type_id)->first();
            return view('me' ,['user' => $user],['patient_type' => $patient_type]);


    }
        public function updatedoctor(Request $request, $id)
    {
        $asd =  auth()->User('name');
        $user = User::find($asd->id);
        
        
        //echo $id;
        DB::table('general_practice')
            ->where('id', $id)
            ->update(['patient_id' => $user->id]);

            $time = date("Y-m-d", time());
         DB::table('general_practice')
            ->where('id', $id)
            ->update(['start_contract' =>$time]);


            $patient_type=$user->patient_type()->get()->first();
            return view('me' ,compact('user','patient_type'));
       

    }
    public function patient_login()
    {
        return view('auth.login');
    }

    public function me()
    {
        $asd =  auth()->User('name');
        $user = User::find($asd->id);

       // return $user;
        $patient_type=$user->patient_type()->get()->first();
        return view('me' ,compact('user','patient_type'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
      $users = User::all()->toArray();
       return view('admin.manager' , compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_to_database(Request $request, $id)
    {
        //
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->surname = $request->get('surname');
        $user->birthday = $request->get('birthday');
        $user->blood_group = $request->get('blood_group');
        $user->age = $request->get('age');
        $user->gender = $request->get('gender');
        $user->patient_type_id = $request->get('patient_type_id');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->operation_id = $request->get('operation_id');
     
        $user->save();
        if($user->typeID==1)
        {
            DB::table('patient')
            ->where('id', $user->id)
            ->update(['id' => $user->id, 'name' => $user->name, 'surname' => $user->name, 'birthdate' => $user->birthday, 'blood_group' => $user->blood_group, 'age' => $user->age, 'gender' => $user->gender, 'patient_type_id' => $user->patient_type_id]
        );
        }

        

        $users = DB::table('users')->get();
        return view('admin.patient' ,['users' => $users]);
    }







    public function manager()
    {
       // return view('create');
       //$user = User::find($id);
      // $user->delete();
      $users = User::all()->toArray();
       return view('admin.manager' , compact('users'));
      //dd($id);
    }
    // artronin
    // bankkooo
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       // return view('create');
       $user = User::find($id);
        
       $check = DB::table('room')->where('patient_id', $id)->first();
        if($check!=null)
        {
            DB::table('room')
            ->where('patient_id', $id)
            ->update(['patient_id' =>"idle"]);
            
            
             DB::table('room')
             ->where('patient_id', $id)
             ->update(['patient_id' => null]);
       
        }
       
        $check2 = DB::table('general_practice')->where('patient_id', $id)->first();
        if($check2!=null)
        {
            DB::table('general_practice')
       ->where('patient_id', $id)
       ->update(['patient_id' => null]);
        
        }

        $check3 = DB::table('schedule')->where('patient_id', $id)->first();
        if($check3!=null)
        {
            DB::table('schedule')->where('patient_id', '=', $id)->delete();
        }

        $check4 = DB::table('presciption')->where('patient_id', $id)->first();
        if($check4!=null)
        {
       DB::table('presciption')->where('patient_id', '=', $id)->delete();
        }


       $user->delete();

       $users = DB::table('users')->get();
       return view('admin.patient' ,['users' => $users]);
      //dd($id);

    }

    public function update($id)
    {
        $user = User::find($id);
       return view('update' , compact('user','id'));
      }

    public function search(Request $request)
    {
        $user = User::find($request->get('id'));
        $patient_type=$user->patient_type;
      return view('search' ,compact('user','patient_type'));
    }


}
