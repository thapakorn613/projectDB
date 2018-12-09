@extends('layouts.appHead')

@section('content')


<div class="container">
      <div class="row">
            <div class="col-md-12">
               <br><br>
              

              <table class="table table-bordered table-striped">
              <tr> <th>doctor</th>
                    <th>add</th>
              
              
              @for ($i = 0; $i < count($users); $i++) <tr>
              <td>{{$users[$i]->name}}</td>     
              
              
              

             <td><a href="{{action('UsersController@index')}}" class="btn btn-primary">add</a></td>
           
              

              </tr>
              @endfor




              </table>
              
               
              <form action="{{action('UsersController@search')}}" method="get">
                   ID: <input type="text" name="id">
                     
                  <input type="submit" value="Search">
                      </form>





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