@extends('layouts.appHead')

@section('content')


<div class="container">
      <div class="row">
            <div class="col-md-12">
               <br><br>
              

             
              
              
              
             
             
              

          <center>
               
               <form action="{{action('UsersController@login')}}" method="get">
                 Enter your E-mail agian : <input type="text" name="email">
                     
                  <input type="submit" value="Search">
                      </form>
</center>


               </div>
               </div>
               </div>

               @stop