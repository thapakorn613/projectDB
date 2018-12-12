@extends('layouts.appHead')
@section('content')
<br>
<div class="container">
      <div class="row">
            <div class="col-md-7 text-center">
                  
                  <th>Doctor : "{{Auth::user()->name}} {{Auth::user()->surname}}"</th>
                 
            </div>
      </div>
</div>

<div class="container">
      <div class="row">
            <div class="col-md-10 text-center">
            <br>
            <table class="table table-bordered table-striped">
                  <tr>
                  <th>Doctor ID </th>
                  <th>Name</th></tr>
            <br>
                  <?php
                    for ( $i=0;$i<count($patient);$i++) {
                              if(Auth::user()->id() == $patient[$i]->userID){ #
                                    $num = $patient[$i]->id;
                                    for ( $j=0;$j<count($gp);$j++) {
                                          if($gp[$j]->patient_id == $num){ ?>
                                          <tr>
                                          <th>{{$gp[$j]->id}}</th>
                                          <th>{{$gp[$j]->name}} {{$gp[$j]->surname}}</th>
                                          </tr>
                  <?php }}}}?>


            </table>
            </div>
      </div>
</div>

@stop