@extends('layouts.appHeadAdmin')

@section('content')
               
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('update') }}  <a href="{{ route('login') }}"> Data</a></div>
        
                        <div class="card-body">
                            <form method="POST" action="{{action('UsersController@updateuser') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"  required autofocus>
                                       
                                    </div>
                                </div>
                                   <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('surname') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname"  required autofocus>
        
                                    </div>
                                </div>
        
        
        
        
                                 <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('salary') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="salary" type="text" class="form-control{{ $errors->has('salary') ? ' is-invalid' : '' }}" name="salary"  required autofocus>
        
                                    </div>
                                </div>
        
        
        
        
                                 <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('fee_per_hour') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="fee_per_hour" type="text" class="form-control{{ $errors->has('fee_per_hour') ? ' is-invalid' : '' }}" name="fee_per_hour"  required autofocus>
        
                                       
                                    </div>
                                </div>
                               
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('update') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection