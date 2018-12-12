@extends('layouts.appHead')
@section('content')

<div class="container">
      <div class="row">
            <div class="col-md-10 text-center">
            <br>
            <table class="table table-bordered table-striped">
                  <tr>
                  <th>Operation List of</th></tr>
                  <tr>
                  <th>"{{Auth::user()->name}} {{Auth::user()->surname}}"</th></tr>
            </table>
            </div>
      </div>
</div>

<div class="container">
      <div class="row">
                  
                                          <div class="col-md-10 text-center">
                                                <table class="table table-bordered table-striped">
                                                <tr>
                                                      <th>Operation ID</th>
                                                      <th>Room ID</th>
                                                      <th>Fee</th>
                                                      <th>Patient ID</th>
                                                      <th>Anesthetists ID</th>
                                                      <th>Surgeons ID</th>
                                                      <th>Nurse ID</th>
                                                </tr>
                                                <tr>
                                                      <th>{{$operation->operation_id}}</th>
                                                      <th>{{$operation->operation_room_id}}</th>
                                                      <th>{{$operation->fee}}</th>
                                                      <th>{{$operation->id_user}} : {{$patient->name}} {{$patient->surname}}</th>
                                                      <th>{{$operation->id_anes}}</th>
                                                      <th>{{$operation->id_surgeons}}</th>
                                                      <th>{{$operation->id_nurse}}</th>
                                                </tr>
                                                </table>
                                          </div>
                   
      </div>
</div>
<center>
<a href="{{ action('gpController@addAnes') }}" class="btn btn-primary">Add Anesthetist</a>
<a href="{{ action('gpController@addSurgeons') }}" class="btn btn-primary">Add Surgeons</a>
<a href="{{ action('gpController@addNurse') }}" class="btn btn-primary">Add Nurse</a>
</center>
@stop