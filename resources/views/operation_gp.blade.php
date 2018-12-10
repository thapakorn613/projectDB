@extends('layouts.appHead')

@section('content')
$arr = array(0, 1, 2);
<div class="container">
      <div class="row">
            <div class="col-md-9">
                  <br><br>
                  <table class="table table-bordered table-striped">
                  <tr>
                  <th>Operation</th>
                  <th>Room ID</th>
                  <th>fee</th>
                  <th>id_user</th>
                  <th>id_anes</th>
                  <th>id_surgeons</th>
                  <th>id_nurse</th>
                  @if($patient[0]->gp_id == '1001')
                        <tr>
                        <th>"{{$operation[0]->operation_id}}"</th>
                        <th>"{{$operation[0]->operation_room_id}}"</th>
                        <th>"{{$operation[0]->fee}}"</th>
                        <th>"{{$operation[0]->id_user}}"</th>
                        <th>"{{$operation[0]->id_anes}}"</th>
                        <th>"{{$operation[0]->id_surgeons}}"</th>
                        <th>"{{$operation[0]->id_nurse}}"</th>
                  @endif
            </div>
      </div>
</div>
@stop