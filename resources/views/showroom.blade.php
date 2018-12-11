@extends('layouts.appHead')

@section('content')


<div class="container">
      <div class="row">
            <div class="col-md-12">
               <br><br>
              
              <center>
              <table class="table table-bordered table-striped">
              <tr> <th>Your room </th>
                <th>"{{$i->room_id}}"</th>
                <th> <a href="{{action('UsersController@cancelroom',$i->room_id )}}" class="btn btn-danger">cancel</a></th>
              <tr>

             
              
              
              
              
</center>
              

               </div>
               </div>
               </div>

               @stop