@extends('layouts.appHeadAdmin')
@section('content')


<div class="container">
      <div class="row">
            <div class="col-md-12">
               <br><br>
              

              <table class="table table-bordered table-striped">
              <tr> <th>ID</th>
                    <th>first name</th>
              <th>edit</th>
              <th> delete</th>

              @foreach($users as $row) 
                  <tr>
                  <td>{{$row['id']}}</td>
                  <td>{{$row['name']}}</td>
                  <td><a href="{{action('UsersController@update',$row['id'])}}" class="btn btn-primary">Edit</a></td>
                  <td><a href="{{action('UsersController@destroy',$row['id'])}}" class="btn btn-danger">Delete</a></td>
                  </tr>
              @endforeach
              </table>
               </div>
               </div>
               </div>

               <script type="text/javascript">
             $(document).ready(function(){ $(".delete_form").on('submit', function(){

                   if(confirm("ok?"))
                   {
                         return true;
                   }
                   else {
                         return false;
                   }
             });
             });


               </script>
               @stop