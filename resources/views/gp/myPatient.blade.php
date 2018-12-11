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
                    $sizeofPatient = count($patient);
                    for ( $i=0;$i<count($patient);$i++) { 
                        if($gp[0]->patient_id == $patient[$i]->id){ ?>
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
                                                <th>{{$patient[$i]->id}}</th>
                                                <th>{{$patient[$i]->name}} {{$patient[$i]->surname}}</th>
                                                <th>{{$patient[$i]->birthdate}}</th>
                                                <th>{{$patient[$i]->blood_group}}</th>
                                                <th>{{$patient[$i]->age}}</th>
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
                                                <th>{{$patient[$i]->gender}}</th>
                                                <?php $operation_id;$patient_type_id ;
                                                if($patient[$i]->operation_id == null) {
                                                    $operation_id = 'Null';
                                                } 
                                                else $operation_id = $patient[$i]->operation_id;
                                                if($patient[$i]->patient_type_id == null) {
                                                    $patient_type_id = 'Null';
                                                } 
                                                else $patient_type_id = $patient[$i]->operation_id;
                                                ?> 
                                                <th>{{$operation_id}}</th>
                                                <th>{{$patient_type_id}}</th>
                                          </tr>
                                    </table>
                            </div>
                  <?php }}?>
      </div>
</div>
@stop