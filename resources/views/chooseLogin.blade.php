@extends('layouts.appHead')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login as patient') }}</div><br>
                        <a href="{{action('UsersController@user_login')}}" class="btn btn-primary">login Patient</a><br>
                        <a href="{{action('Auth\UserGPLoginController@showLoginForm')}}" class="btn btn-primary">login GP</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
