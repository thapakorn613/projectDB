@extends('layouts.appHead')

@section('content')

<div class="container">
      <div class="row">
            <div class="col-md-12">
                  <br><br>
                  <table class="table table-bordered table-striped">
                  <tr>
                  <th>first name</th>
                  <th>"{{$user->name}}"</th>
                  <tr>
            </div>
      </div>
</div>
@stop