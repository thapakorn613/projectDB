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
                  <?php 
                        for ( $i = 0 ; $i < count($gp); $i++ ) {
                              if(Auth::user()->id() == $gp[$i]->userID){
                                    $patientID = $gp[$i]->patient_id;
                                    for ( $j = 0 ; $j < count($operation); $j++ ) {
                                          if($patientID == $operation[$j]->id_user){ ?>
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
                                                      <th>{{$operation[$j]->operation_id}}</th>
                                                      <th>{{$operation[$j]->operation_room_id}}</th>
                                                      <th>{{$operation[$j]->fee}}</th>
                                                      <th>{{$operation[$j]->id_user}} : {{$patient[$i]->name}} {{$patient[$i]->surname}}</th>
                                                      <th>{{$operation[$j]->id_anes}}</th>
                                                      <th>{{$operation[$j]->id_surgeons}}</th>
                                                      <th>{{$operation[$j]->id_nurse}}</th>
                                                </tr>
                                                </table>
                                          </div>
                  <?php }}}} ?>
      </div>
</div>
<center>
<a href="{{ action('gpController@addAnes') }}" class="btn btn-primary">Add Anesthetist</a>
<a href="{{ action('gpController@addSurgeons') }}" class="btn btn-primary">Add Surgeons</a>
<a href="{{ action('gpController@addNurse') }}" class="btn btn-primary">Add Nurse</a>
</center>
@stop