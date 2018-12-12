@extends('layouts.appHead')

@section('content')

                 
<div class="row picture1">
        <div class="col-6">
        
        </div>
        <div class="col-6">
          <a href="{{ action('gpController@showOperation') }}">
            <img src="img/11.png" title="Example Image Link" width="100%"/>
          </a>
          <a href="#a"> <!-- link to ดูตารางนัด-->
            <img src="img/21.png" title="Example Image Link" width="100%"/>
          </a>
          <a href="#b"> <!-- link to ............. -->
            <img src="img/31.png" title="Example Image Link" width="100%"/>
          </a>
        </div>
      </div>
@endsection
