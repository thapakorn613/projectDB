<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->toArray();
<<<<<<< HEAD
       return view('home' , compact('users'));
=======
       return view('index' , compact('users'));
>>>>>>> parent of a5cfbc5... show_description_after_login
    }
}
