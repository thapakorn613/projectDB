@extends('layouts.appHead')

@section('content')


<div class="container">
   
           
        
        
               
            <form method="POST" action="{{action('UsersController@updateroom' )}}">
                                @csrf

              
        
    <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('patient') }}</label>

        <div class="col-md-4">
            <select  id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
            @for ($i = 0; $i < count($user); $i++)
            @if($user[$i]->typeID==1)
                    <option value='{{$user[$i]->id}}'>{{$user[$i]->name}}</option>
                   @endif
            @endfor
            </select>
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    

    <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('room') }}</label>
        <div class="col-md-4">
            <select  id="room" class="form-control{{ $errors->has('room') ? ' is-invalid' : '' }}" name="room" value="{{ old('room') }}" required autofocus>
            @for ($i = 0; $i < count($room); $i++)
            @if($room[$i]->status == "idle" && $room[$i]->type_room == "PATIENT_ROOM")
                    <option value='{{$room[$i]->room_id}}'>{{$room[$i]->room_id}}</option>
                   @endif
            @endfor
            </select>
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>



         <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('date') }}</label>
        
        <div class="col-md-4">
            <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ old('date') }}" required autofocus>

            @if ($errors->has('date'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('date') }}</strong>
                </span>
            @endif
        </div>



    



    </div>
              
    
    <div class="form-group row mb-4">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success">
                                            {{ __('add_room') }}
                                        </button>
                                    </div>
                                </div>



</form>

               </div>

               
@stop
             
              
              
              
               
              
