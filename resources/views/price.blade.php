@extends('layouts.appHead')

@section('content')


<div class="container">
      <div class="row">
            <div class="col-md-12">
               <br><br>
               <a href="{{action('UsersController@me' )}}" class="btn btn-danger">back</a>
              <center>
              <table class="table table-bordered table-striped">
              <tr> <th>Your ID</th>
                <th>"{{$price->patient_id}}"</th><tr>
                <tr><th>operation</th>
                <th>"{{$price->operation_price}}"</th><tr>
                <tr><th>room </th>
                <th>"{{$price->room_price}}"</th><tr>
                <tr><th>discount</th>
                <th>"{{$price->discount}}"</th><tr>
                <tr><th>Total</th>
                <th>"{{$price->price}}"</th><tr>
            
              

             
              
              
              
              
</center>
              

               </div>
               </div>
               </div>

               @stop