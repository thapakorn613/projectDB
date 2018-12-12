<?php

namespace App\Http\Controllers;
use App\User;
use App\operation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class chooseLoginController extends Controller
{
    public function LoginForm ()
    {
        return view('chooseLogin');
    }
}