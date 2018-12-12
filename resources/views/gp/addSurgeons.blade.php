@extends('layouts.appHead')
@section('content')

<div class="container">
      <div class="row">
            <div class="col-md-10 text-center">
            <br>
            <table class="table table-bordered table-striped">
                  <tr>
                  <th>Surgeons List of</th></tr>
                  <tr>
                  <th>"{{Auth::user()->name}} {{Auth::user()->surname}}"</th></tr>
            </table>
            </div>
      </div>
</div>
<div class="container">
      <div class="row">
            <div class="col-md-8">
               <br>
                  <table class="table table-bordered table-striped">
                        <tr> 
                        <th>Surgeons</th>
                        <th>add</th>
                        <?php 
                        for ($i = 0; $i < count($surgeons); $i++) {     
                              if($surgeons[$i]->operation_id == null) {?>
                                    <tr>
                                    <td>me</td>     
                                    <td><a href="#add anes" class="btn btn-primary">add</a></td>
                                    </tr>
                        <?php }}?>

                  </table>
            </div>
      </div>
</div>









@stop