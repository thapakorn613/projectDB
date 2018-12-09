@extends('layouts.appHead')

@section('content')


<div class="container">
      <div class="row">
            <div class="col-md-12">
                <br><br> 
                <table class="table table-bordered table-striped">
                    <tr> 
                        <th>first name</th>
                        <th>edit</th>
                        @foreach($users as $row) <tr>
                            <td>{{$row['name']}}</td>
                            <td><a href="{{action('UsersController@update',$row['id'])}}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{action('UsersController@destroy',$row['id'])}}" onClick="return confirm('Delete This account?')" class="btn btn-danger">delete</a></td>
                        </tr>
                        @endforeach
                </table>
            </div>
      </div>
</div>
@stop