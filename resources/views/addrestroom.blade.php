@extends('layouts.appHead')

@section('content')


<div class="container">
      <div class="row">
            <div class="col-md-12">
               <br><br>
              

              <table class="table table-bordered table-striped">
              <tr> <th>Room</th>
                    <th>add</th>
              
              
              @for ($i = 0; $i < count($room); $i++)
              @if($room[$i]->status == "idle" && $room[$i]->type_room == "PATIENT_ROOM") <tr>
              <td>{{$room[$i]->room_id}}</td>     
              
              
              

             <td><a href="{{action('UsersController@updateroom',$room[$i]->room_id  )   }}" class="btn btn-primary">add</a></td>
           
              

              </tr>
              @endif
              @endfor




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