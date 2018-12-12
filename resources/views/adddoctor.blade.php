@extends('layouts.appHead')

@section('content')


<div class="container">
      <div class="row">
            <div class="col-md-12">
               <br><br>
                  <table class="table table-bordered table-striped">
                        <tr> 
                        <th>doctor</th>
                        <th>add</th>
                        @for ($i = 0; $i < count($users); $i++) 
                              @if($users[$i]->patient_id == null)
                                    <tr>
                                    <td>{{$users[$i]->name}}</td>     
                                    <td><a href="{{action('UsersController@updatedoctor',$users[$i]->id  )   }}" class="btn btn-primary">add</a></td>
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