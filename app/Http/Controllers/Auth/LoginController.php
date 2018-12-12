<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, User $user){
        //put your thing in here
        //return redirect()->intended($this->redirectPath());
        //return redirect('/me/1');

        
       /* $users = DB::table('users')->get();
        foreach ($users as $eiei) {
            if($eiei->email == $request->get('email')   )
            {  
                $user = User::find($eiei->id);
               //return view('me' ,['user' => $user]);
              
                
               $patient_type=$user->patient_type;
                return view('me' ,compact('user','patient_type'));
                
            }
        }*/
        $userMain = User::find($user->id);
        $patient_type=$userMain->patient_type()->get()->first();
       
        //return $patient_type;
      
      return view('me' ,compact('user','patient_type'));
       
      /*  $user = users::find($request->get('id'));
        $patient_type=$user->patient_type();
      //  echo $patient_type;
      //  echo $user;
        return view('me' ,compact('user','patient_type'));*/
    }
    
}
