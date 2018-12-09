@extends('layouts.app')

@section('content')
               
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                      
                        <div class="card-header">{{ __('Register') }}  <a href="{{ route('login') }}">Login</a></div>
        
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                  
                                <div class="form-group row justify-content-center">
                                    <label for="name" class="col-md-auto col-form-label ">{{ __('Name') }}</label>
        
                                    <div class="col-md-4">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
        
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

  
                                    <label for="name" class="col-md-auto col-form-label">{{ __('surname') }}</label>
        
                                    <div class="col-md-4">
                                        <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>
        
                                        @if ($errors->has('surname'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('surname') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                </div>
        
                                
                              

                                 <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('birthday') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="birthdate" type="date" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="birthday" value="{{ old('birthday') }}" required autofocus>
        
                                        @if ($errors->has('birthday'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('birthday') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
        
        
        
                                 <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('blood_group') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="blood_group" type="text" class="form-control{{ $errors->has('blood_group') ? ' is-invalid' : '' }}" name="blood_group" value="{{ old('birthday') }}" required autofocus>
        
                                        @if ($errors->has('blood_group'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('blood_group') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
        
        
        
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('age') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="age" type="text" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" value="{{ old('age') }}" required autofocus>
        
                                        @if ($errors->has('age'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('age') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('gender') }}</label>
        
                                    <div class="col-md-6">
                                        <select  id="gender" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="{{ old('gender') }}" required autofocus>
                                                <option>male</option>
                                                <option>female</option>
                                        </select>
                                        @if ($errors->has('gender'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
        
        
        
        
        
                                      <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('patient_type_id') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="patient_type_id" type="text" class="form-control{{ $errors->has('patient_type_id') ? ' is-invalid' : '' }}" name="patient_type_id" value="{{ old('patient_type_id') }}" required autofocus>
        
                                        @if ($errors->has('patient_type_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('patient_type_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
        
        
        
        
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
        
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
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
