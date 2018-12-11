@extends('layouts.appHead')

@section('content')

<div class="container">
      <div class="row">
            <div class="col-md-6">
                  <br><br>
                  <table class="table table-bordered table-striped">
                  <tr>
                  <th>operation</th>
                  <th>"{{$operation[0]->operation_id}}"</th>
                  <tr>
                  <th>operation_room_id</th>
                  <th>"{{$operation[0]->operation_room_id}}"</th>
                  <tr>
                  <th>fee</th>
                  <th>"{{$operation[0]->fee}}"</th>
                  <tr>
                  <th>id_user</th>
                  <th>"{{$operation[0]->id_user}}"</th>
                  <tr>
                  <th>id_anes</th>
                  <th>"{{$operation[0]->id_anes}}"</th>
                  <tr>
                  <th>id_surgeons</th>
                  <th>"{{$operation[0]->id_surgeons}}"</th>
                  <tr>
                  <th>id_nurse</th>
                  <th>"{{$operation[0]->id_nurse}}"</th>
            </div>
      </div>
</div>
@stop