<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'birthday' =>['required', 'date'],
            'blood_group' => ['required', 'string', 'max:255'],
            'age' =>['required',  'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }
    protected function registered(Request $request, $user)
    {
        //
        
        //echo $user;
        //return view('me');
        //$userss = User::find($user);
        //return view('users.index',$user);
        #return redirect('/me');
        //return redirect()->route('me', [$user]);
        /*return redirect()->action(
            '/@me', ['id' => 1]
        );*/
        $one = 1;
        $asd =  $request->get('email');
        $user = DB::table('users')->where('email', $asd)->first();
        echo $user->name;

        DB::table('patient')->insert(
            ['id' => $user->id, 'name' => $user->name, 'surname' => $user->name, 'birthdate' => $user->birthday, 'blood_group' => $user->blood_group, 'age' => $user->age, 'gender' => $user->gender, 'patient_type_id' => $user->patient_type_id]
        );
         
        //DB::table('patient_type')->insert(
          //  ['name_type' => $user->id,'discount' => 100]
        //);

        $patient_type = DB::table('patient_type')->where('patient_type_id', $user->patient_type_id)->first();
        //return view('me' ,['user' => $user]);
       // return view('me' ,['user' => $user],['patient_type' => $patient_type]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    
    {
       
       return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
             'surname' => $data['surname'],
             'birthday' => $data['birthday'],
             'blood_group' => $data['blood_group'],
             'age' => $data['age'],
             'gender' => $data['gender'],
            // 'typeID'=>$data['typeID'],


            
        ]);
    }

    
}