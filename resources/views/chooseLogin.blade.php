@extends('layouts.appHead')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login as patient') }}</div><br>
                        <a href="{{route('login')}}" class="btn btn-primary">login Patient</a><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
