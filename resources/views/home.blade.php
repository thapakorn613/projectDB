@extends('layouts.appHead')

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/index1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/index2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/index3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
                 
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
