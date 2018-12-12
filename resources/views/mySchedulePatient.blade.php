@extends('layouts.appHead')
@section('content')
<br>
<div class="container">
      <div class="row">
            <div class="col-md-10 text-center">
                  <tr>
                  <th>List Schedule of : {{Auth::user()->name}} {{Auth::user()->surname}}</th></tr>
            </div>
      </div>
</div>
<br>
<div class="container">
      <div class="row">
            <div class="col-md-10 text-center">
                  <table class="table table-bordered table-striped">
                        <tr>
                              <th>Schedule ID</th>
                              <th>Patient ID</th>
                              <th>Date</th>
                              <th>Time</th>
                        </tr>
                        <?php
                              for( $i=0;$i<count($patient);$i++) {
                                    if(Auth::user()->id() == $patient[$i]->userID){
                                          $num = $patient[$i]->id;
                                          for ( $j=0;$j<count($schedule);$j++) {
                                                if($num == $schedule[$j]->patient_id){ # ใข้ id ของ gp คนที่ 1 ?>
                                                      <tr>
                                                            <th>{{$schedule[$j]->schedule_id}}</th>
                                                            <th>{{$schedule[$j]->patient_id}}</th>
                                                            <th>{{$schedule[$j]->time_fix}}</th>
                                                            <th>{{$schedule[$j]->time}}</th>
                                                      </tr>     
                        <?php }}}}?>
                  </table>
            </div>
     </div>
</div>
@stop