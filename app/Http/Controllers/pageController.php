<?php


namespace App\Http\Controllers;


class pageController extends Controller {


 public function center(){
   return view('center');
    }
   
public function healthExpert(){
    return view('healthExpert');
}

public function aboutAs(){
    return view('aboutAs');
}

}