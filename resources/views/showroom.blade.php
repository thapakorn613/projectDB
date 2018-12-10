@extends('layouts.appHead')

@section('content')


<div class="container">
      <div class="row">
            <div class="col-md-12">
               <br><br>
              

              <table class="table table-bordered table-striped">
              <tr> <th>fee</th>
                <th>"{{$room->data}}"</th>
              <tr>
               <form action="{{action('roomController@searchroom')}}" method="get">
                 room: <input type="text" name="id">
                     
                  <input type="submit" value="Search">
                      </form>



               </div>
               </div>
               </div>

               @stop