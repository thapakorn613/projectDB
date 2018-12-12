@extends('layouts.appHead')
@section('content')

<div class="container">
      <div class="row">
            <div class="col-md-10 text-center">
                  <br>
                  ** รอระบบ login เฉพาะบุคคลใน Nurse โดยนำ Nurse ของคนที่ 1 มา *
                 <br> 
            <br>
            <table class="table table-bordered table-striped">
                  <tr>
                  <th>Operation List of</th></tr>
                  <tr>
                  <th>"{{$anes[0]->name}} {{$anes[0]->surname}}"</th></tr>
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
                        </table>
                  </div>
                  <?php 
                  for ( $i=0;$i<count($operation);$i++) {
                        if($operation[$i]->id_anes == $anes[0]->id) { # ใช้ nurse คนที่ 1 ?>
                              <div class="col-md-10 text-center">
                                    <table class="table table-bordered table-striped">
                                          <tr>
                                                <th>{{$operation[$i]->operation_id}}</th>
                                                <th>{{$operation[$i]->operation_room_id}}</th>
                                                <th>{{$operation[$i]->fee}}</th>
                                                <th>{{$operation[$i]->id_user}}</th>
                                                <th>{{$operation[$i]->id_anes}}</th>
                                                <th>{{$operation[$i]->id_surgeons}}</th>
                                                <th>{{$operation[$i]->id_nurse}}</th>
                                          </tr>
                                          </table>
                                    </div>
                  <?php }} ?>
      </div>
</div>
@stop