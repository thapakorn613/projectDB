<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class UsersController extends Controller
{

    private $me ;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $users = User::all()->toArray();
        return view('admin.manager' , compact('users'));

    }

    public function login(Request $request)
    {
        
        $users = DB::table('users')->get();
        
        foreach ($users as $eiei) {
          
            if($eiei->email == $request->get('email') &&password_verify($request->get('password'), $eiei->password)  )
            {  
                
                $this->me = $eiei->id;
                
                $user = User::find($this->me);
                
                return view('me' ,['user' => $user]);
            }
        }
        return view('auth/login');
        //$user = User::find($request->get('email'));
        
        //return view('me');

    }

    public function adddoctor(Request $request)
    {

        $users = DB::table('general_practice')->get();
        
        
        return view('adddoctor' ,['users' => $users]);
        

    }

    public function addrestroom(Request $request)
    {

        $room = DB::table('room')->get();
        
        
        return view('addrestroom' ,['room' => $room]);
        
       
       

    }

    public function updateroom(Request $request, $id)
    {
        $asd =  auth()->User('name');
        $user = User::find($asd->id);
        $room = DB::table('room')->get();
        foreach($room as $i)
        {
            if($i->patient_id==$user->id)
            {
                $room = $i->room_id;
               
                return view('showroom' ,['i' => $i]);
            }
        }

        //echo $id;
        DB::table('room')
            ->where('room_id', $id)
            ->update(['status' => "busy"]);

        
       
            $asd =  auth()->User('name');
            $user = User::find($asd->id);

        DB::table('room')
            ->where('room_id', $id)
            ->update(['patient_id' => $asd->id]);

            return view('me' ,['user' => $user]);
       

    }

    public function user_login()
    {
           return view('user_login');
    }
    public function patient_login()
    {
        return view('auth/login');
       
       
    }

    public function me()
    {
        $asd =  auth()->User('name');
        $user = User::find($asd->id);
        return view('me' ,['user' => $user]);

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
        $users = User::all()->toArray();
       return view('index' , compact('users'));
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
       $user->delete();
      $users = User::all()->toArray();
       return view('index' , compact('users'));
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
      return view('search' ,compact('user','id'));
    }


}
