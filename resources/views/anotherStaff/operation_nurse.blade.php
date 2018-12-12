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
                  
                  <?php 
                        for ( $i = 0 ; $i < count($nurse); $i++ ) {
                              if(Auth::user()->id() == $nurse[$i]->userID){
                                    $nurseID = $nurse[$i]->id;
                                    for ( $j = 0 ; $j < count($operation); $j++ ) {
                                          if($nurseID == $operation[$j]->id_nurse){ ?>
                                                      <tr>
                                                            <th>{{$operation[$j]->id_user}} : {{$patient[$i]->name}} {{$patient[$i]->surname}}</th>
                                                            <th>{{$operation[$j]->id_anes}}</th>
                                                            <th>{{$operation[$j]->id_surgeons}}</th>
                                                            <th>{{$operation[$j]->id_nurse}}</th>
                                                            <th>{{$operation[$j]->operation_id}}</th>
                                                            <th>{{$operation[$j]->operation_room_id}}</th>
                                                            <th>{{$operation[$j]->fee}}</th>
                                                      </tr>
                                                      
                  <?php }}}} ?>
                  </table>
            </div>
      </div>
</div>
@stop