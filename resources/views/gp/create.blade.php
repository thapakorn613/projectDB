@extends('layouts.appHead')

@section('content')


<div class="container">
   
           
        
        
               
            <form method="POST" action="{{action('gpController@create')}}">
                                @csrf

              
        
    <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('room') }}</label>

        <div class="col-md-4">
            <select  id="room" class="form-control{{ $errors->has('room') ? ' is-invalid' : '' }}" name="room" value="{{ old('room') }}" required autofocus>
            @for ($i = 0; $i < count($user); $i++)
            @if($user[$i]->type_room == " OPERATION_ROOM")
                    <option value='{{$user[$i]->room_id}}'>{{$user[$i]->room_id}}</option>
                   @endif
            @endfor
            </select>
            @if ($errors->has('room'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('room') }}</strong>
                </span>
            @endif
        </div>
    

    <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('fee') }}</label>
        <div class="col-md-4">
            <select  id="fee" class="form-control{{ $errors->has('fee') ? ' is-invalid' : '' }}" name="fee" value="{{ old('fee') }}" required autofocus>
           
                    <option >100</option>
                    <option >200</option>
                    <option >300</option>
                    <option >400</option>
                    <option >500</option>
                    <option >600</option>
                    <option >700</option>
                    <option >800</option>
                    <option >900</option>
                    <option >1000</option>
                    </select>
        </div>


        <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('hour') }}</label>
        <div class="col-md-4">
            <select  id="hour" class="form-control{{ $errors->has('hour') ? ' is-invalid' : '' }}" name="hour" value="{{ old('hour') }}" required autofocus>
           
                    <option >1</option>
                    <option >2</option>
                    <option >3</option>
                    <option >4</option>
                    <option >5</option>
                    <option >6</option>
                    <option >7</option>
                    <option >8</option>
                    <option >9</option>
                    <option >10</option>
                    </div>
            </select>
            
        </div>



         



    



    </div>
              
    
    <div class="form-group row mb-4">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success">
                                            {{ __('create') }}
                                        </button>
                                    </div>
                                </div>



</form>

               </div>

               
@stop
             
              
              
              
               
              
