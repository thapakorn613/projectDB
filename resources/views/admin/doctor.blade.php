@extends('layouts.appHead')

@section('content')


<div class="container">
      <div class="row">
            <div class="col-md-12">
                <br><br> 
                <table class="table table-bordered table-striped">
                @for($i=0; $i < count($users);$i++)
                   @if($users[$i]->typeID==5)
                  <tr>
                        <td>{{$users[$i]->name}}</td>
                       
                        <td><a href="{{action('UsersController@destroy',$users[$i]->id)}}" onClick="return confirm('Delete This account?')" class="btn btn-danger">delete</a></td>
                        </tr>
                       @endif
                  @endfor
                </table>
            </div>
      </div>
</div>
@stop