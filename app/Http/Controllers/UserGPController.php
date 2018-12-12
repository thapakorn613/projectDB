<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserGPController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:usergp');
    }
    public function index()
    {
        return view('usergp');
    }

}
