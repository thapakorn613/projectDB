@extends('layouts.appHead')

@section('content')


<div class="container">
   
           
        
        
               
            <form method="POST" action="{{action('UsersController@addmeet' )}}">
                                @csrf

              <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('doctor') }}</label>
        
        <div class="col-md-4">
            <select  id="doctor" class="form-control{{ $errors->has('doctor') ? ' is-invalid' : '' }}" name="doctor" value="{{ old('doctor') }}" required autofocus>
            @for ($i = 0; $i < count($gp); $i++)
                    <option value='{{$gp[$i]->id}}'>{{$gp[$i]->name}}</option>
                   
            @endfor
            </select>
            @if ($errors->has('doctor'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('doctor') }}</strong>
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

    <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('time') }}</label>
        
        <div class="col-md-4">
            <select  id="time" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="time" value="{{ old('time') }}" required autofocus>
                    <option>9.00-10.00</option>
                    <option>13.00-14.00</option>
                    <option>14.00-15.00</option>
            </select>
            @if ($errors->has('time'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('time') }}</strong>
                </span>
            @endif
        </div>



    </div>
              
    
    <div class="form-group row mb-4">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success">
                                            {{ __('update') }}
                                        </button>
                                    </div>
                                </div>



</form>

               </div>

               

             
               @stop