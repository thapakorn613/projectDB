@extends('layouts.appHeadAdmin')
@section('content')

<div class="container">
      <div class="row">
            <div class="col-md-12">
                  <br><br> 
                  <table class="table table-bordered table-striped">
                  <tr> <th>Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  @for($i=0; $i < count($users);$i++)
                        @if($users[$i]->typeID == 1 && $users[$i]->is_admin != 1 )
                              <tr>
                                    <td>{{$users[$i]->name}} {{$users[$i]->surname}}</td>
                                    <td><a href="{{action('UsersController@update',$users[$i]->id)}}" class="btn btn-primary">Edit</a></td>
                                    <td><a href="{{action('UsersController@destroy',$users[$i]->id)}}" onClick="return confirm('Delete This account?')" class="btn btn-danger">delete</a></td>
                              </tr>
                       @endif
                  @endfor
                  </table>
            </div>
      </div>
</div>
      <script type="text/javascript">
      $(document).ready(function(){ 
            $(".delete_form").on('submit', function(){
                  if(confirm("ok?")){
                        return true;
                  }
                  else {
                        return false;
                  }
            });
      });
</script>
@stop