@extends('layouts.appHead')
@section('content')

<div class="container">
      <div class="row">
            <div class="col-md-10 text-center">
                  <br>
                  ** รอระบบ login เฉพาะบุคคลใน genaral_practic โดยนำ Genaral_p ของคนที่ 1 มา *<br>
                  ** ทำระบบ โชว์หน้าโปรไฟล์
                 <br> 
            <br>
            </div>
      </div>
</div>

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
                  </table>
            </div>
            <?php 

            for ( $i=0;$i<count($gp);$i++) {
                  if(Auth::user()->id() == $gp[$i]->userID){
                        $num = $gp[$i]->id;
                        for ( $j=0;$j<count($schedule);$j++) {
                              if($num == $schedule[$j]->gp_id){ # ใข้ id ของ gp คนที่ 1 ?>
                                    <div class="col-md-10 text-center">
                                          <table class="table table-bordered table-striped">
                                                <tr>
                                                      <th>{{$schedule[$j]->schedule_id}}</th>
                                                      <th>{{$schedule[$j]->patient_id}}</th>
                                                      <th>{{$schedule[$j]->time_fix}}</th>
                                                      <th>{{$schedule[$j]->time}}</th>
                                                </tr>
                                          </table>
                                    </div>
            <?php }}}}?>
     </div>
</div>
@stop