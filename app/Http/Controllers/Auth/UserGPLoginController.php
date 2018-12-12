<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class UserGPLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm ()
    {
        return view('auth.usergp-login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' =>'required|min:6'
        ]); //validate form data
        
        if( Auth::guard('usergp')->attempt(['email' => $request ->email, 'password' => $request ->password],$request ->remember)){
            return redirect()->intended(route('usergp.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));
        
        

    }
    public function logout()
    {
        Auth::guard('usergp')->logout();
        return redirect('/');
    }
}
