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
              <tr>
<<<<<<< HEAD

             
              
              
              
              
</center>
              
             
             
              

          
               
               
=======
               <form action="{{action('roomController@searchroom')}}" method="get">
                 room: <input type="text" name="id">
                     
                  <input type="submit" value="Search">
                      </form>

>>>>>>> 27f59117aa33d65819eb397aaabfca8a6e394b5f


               </div>
               </div>
               </div>

               @stop