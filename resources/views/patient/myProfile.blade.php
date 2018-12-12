@extends('layouts.appHead')
@section('content')

<div class="container">
      <div class="row">
            <div class="col-md-10 text-center">
            <br>
            <table class="table table-bordered table-striped">
                  <tr>
                  <th>Name : </th>
                  <th>"{{Auth::user()->name}} {{Auth::user()->surname}}"</th></tr>
            </table>
            </div>
      </div>
</div>
@stop