@extends('layouts.appHead')

@section('content')

<div class="container">
      <div class="row">
            <div class="col-md-12">
                  <br><br>
                  <table class="table table-bordered table-striped">
                  <tr><th>first name</th>
                  <th>"{{$user->name}}"</th>
                  <tr>
                  <th>surname</th>
                  <td>"{{$user->surname}}"</td>
                  <tr>
                  <th>birthday</th>
                  <td>"{{$user->birthday}}"</td>
                  <tr>
                  <th>blood_group</th>
                  <td>"{{$user->blood_group}}"</td>
                  <tr>
                  <th>age</th>
                  <td>"{{$user->age}}"</td>
                  <tr>
                  <th>gender</th>
                  <td>"{{$user->gender}}"</td>
                  <tr>
                  <th>E-Mail</th>
                  <td>"{{$user->email}}"</td>
                  <tr>
                  <th>patient_type</th>
                  <td>"{{$patient_type->name_type}}"</td>
                  <tr>
                  <th>operation_id</th>
                  <td >"{{$user->operation_id}}"</td>
                  <tr> 
                  <a href="{{action('UsersController@adddoctor',$user->id )}}" class="btn btn-primary">Add doctor</a>
            @if($user->typeID==5)
                  <a href="{{action('UsersController@addrestroom',$user->id )}}" class="btn btn-danger">Add room</a>
                  @endif
                  <a href="{{action('UsersController@printciple',$user->id )}}" class="btn btn-warning">Presciption</a>
                  <a href="{{action('UsersController@meet' )}}" class="btn btn-success">Meet</a>
            </div>
      </div>
</div>
@stop
