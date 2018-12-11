@extends('layouts.appHead')
@section('content')

<div class="container">
      <div class="row">
            <div class="col-md-10 text-center">
                  <br>
                  ** รอระบบ login เฉพาะบุคคลใน genaral_practic โดยนำ Genaral_p ของคนที่ 1 มา *
                 <br> 
            <br>
            <table class="table table-bordered table-striped">
                  <tr>
                  <th>Operation List of</th></tr>
                  <tr>
                  <th>"{{$gp[0]->name}} {{$gp[0]->surname}}"</th></tr>
            </table>
            </div>
      </div>
</div>

<div class="container">
      <div class="row">
                  <?php 
                  $sizeofPatient = count($patient);
                  for ( $i=0;$i<count($patient);$i++) {
                        if($patient[$i]->gp_id == $gp[0]->id) { # 
                              for ( $j = 0 ; $j < count($operation); $j++ ) {
                                    if($operation[$j]->id_user == $patient[$i]->id){ ?>
                                     <div class="col-md-10 text-center">
                                          <table class="table table-bordered table-striped">
                                          <tr>
                                                <th>Operation ID</th>
                                                <th>Room ID</th>
                                                <th>Fee</th>
                                          </tr>
                                          <tr>
                                                <th>{{$operation[$j]->operation_id}}</th>
                                                <th>{{$operation[$j]->operation_room_id}}</th>
                                                <th>{{$operation[$j]->fee}}</th>
                                          </tr></table>
                                    </div>
                                    <div class="col-md-10 text-center">
                                          <table class="table table-bordered table-striped">
                                          <tr>
                                                <th>Patient ID</th>
                                                <th>Anesthetists ID</th>
                                                <th>Surgeons ID</th>
                                                <th>Nurse ID</th>
                                          </tr>
                                          <tr>
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
@stop