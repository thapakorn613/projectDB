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
                  <?php
                    for ( $i=0;$i<count($gp);$i++) {
                              if(Auth::user()->id() == $gp[$i]->userID){ #
                                    $num = $gp[$i]->id;
                                    for ( $j=0;$j<count($patient);$j++) {
                                          if($patient[$j]->gp_id == $num){                                                ?> 
                                                <div class="col-md-10 text-center">
                                                            <table class="table table-bordered table-striped">
                                                                  <tr>
                                                                        <th>Patient ID</th>
                                                                        <th>Name Surname</th>
                                                                        <th>BirthDate</th>
                                                                        <th>Blood Group</th>
                                                                        <th>Age</th>
                                                                  </tr>
                                                                  <tr>
                                                                        <th>{{$patient[$j]->id}}</th>
                                                                        <th>{{$patient[$j]->name}} {{$patient[$j]->surname}}</th>
                                                                        <th>{{$patient[$j]->birthdate}}</th>
                                                                        <th>{{$patient[$j]->blood_group}}</th>
                                                                        <th>{{$patient[$j]->age}}</th>
                                                                  </tr>
                                                            </table>
                                                </div>
                                                <div class="col-md-10 text-center">
                                                      <table class="table table-bordered table-striped">
                                                            <tr>
                                                                  <th>Gender</th>
                                                                  <th>Operation ID</th>
                                                                  <th>patient_type_id</th>
                                                            </tr>
                                                            <tr>
                                                                  <th>{{$patient[$j]->gender}}</th>
                                                                  <?php $operation_id;$patient_type_id ;
                                                                        if($patient[$j]->operation_id == null) {
                                                                              $operation_id = 'Null';
                                                                        } 
                                                                        else $operation_id = $patient[$i]->operation_id;
                                                                        if($patient[$j]->patient_type_id == null) {
                                                                              $patient_type_id = 'Null';
                                                                        } 
                                                                        else $patient_type_id = $patient[$j]->operation_id;
                                                                  ?> 
                                                                  <th>{{$operation_id}}</th>
                                                                  <th>{{$patient_type_id}}</th>
                                                            </tr>
                                                      </table>
                                                </div>
                  <?php }}}}?>
           
      </div>
</div>
@stop