@extends('layouts.appHead')
@section('content')
<div class="container">
      <div class="row">
            <div class="col-md-9">
                  <br><br>
                  <table class="table table-bordered table-striped">
                  <tr>
                  <th>Operation</th>
                  <th>Room ID</th>
                  <th>Patient ID</th>
                  <th>Anesthetists ID</th>
                  <th>Surgeons ID</th>
                  <th>Nurse ID</th>
                  <th>Fee</th>
                  </tr>
                  <?php 
                  $sizeofPatient = count($patient); # size of patient
                  for ( $i=0;$i<count($patient);$i++) {
                        if($patient[$i]->gp_id == $gp[0]->id) { # 
                              $arr = array(0, 1); # size of operaiton
                              for ( $j = 0 ; $j < count($operation); $j++ ) {
                                    if($operation[$j]->id_user == $patient[$i]->id){ ?>
                                          <tr>
                                          <th>"{{$operation[$j]->operation_id}}"</th>
                                          <th>"{{$operation[$j]->operation_room_id}}"</th>
                                          <th>"{{$operation[$j]->id_user}}"</th>
                                          <th>"{{$operation[$j]->id_anes}}"</th>
                                          <th>"{{$operation[$j]->id_surgeons}}"</th>
                                          <th>"{{$operation[$j]->id_nurse}}"</th>
                                          <th>"{{$operation[$j]->fee}}"</th>
                                          </tr>
                  <?php }}}} ?>
            </div>
      </div>
</div>
@stop