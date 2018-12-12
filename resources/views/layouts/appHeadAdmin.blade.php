<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <style>
    div.picture1 {

   background-image:url('img/index1.jpg');
      /* Full height */
      height: 100%; 

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
  
}

   .bgSkyBlue {

background-image:url('img/bgSkyBlue.png');
   /* Full height */
   height: 100%; 

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;

}


#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
    </style>

    
   
    <title>OSAS hospital</title>
  </head>

  <body>
        <div id="app">
                <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">
        
                            </ul>
        
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        @if (Route::has('register'))
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        @endif
                                    </li>
                                @else
                                    @if (Auth::user()->isAdmin() == '1')
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ action('UsersController@index',1) }}" >{{ __('Maneger') }}</a>
                                    </li>
                                    @endif
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
        
            </div>
    
      <!-- Image and text -->


  
      <div class="row">
        <div class="col-10">
            <img src="img/logo.png" width="10%"  alt="">
            <img src="img/logo_name.png" width="20%"alt="">
        </div>
        <div class="col-2">
            <img class="img-responsive pull-right" src="img/login.png" width="20%"alt="">
            <img class="img-responsive pull-right" src="img/exit.png" width="20%"alt="">
            <h1 class="bold text-right">tel.19991919</h1>
        </div>
      </div>
    

     <!-- <nav class="nav nav-pills nav-justified bg-light nav-tabs">
          <a class="nav-item nav-link active" href="#Home">Home</a>
          <a class="nav-item nav-link" href="#Centers">Centers & Clinics</a>
          <a class="nav-item nav-link" href="#Patient">Patient Care</a>
          <a class="nav-item nav-link" href="#Health">Health Expert</a>
          <a class="nav-item nav-link" href="#About">About us</a>

        </nav>
-->

          <div class=" mt-3">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
            <li class="nav-item">
                                        <a class="nav-link" href="{{ action('UsersController@index',1) }}" >{{ __('patient') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ action('UsersController@index',2) }}" >{{ __('Genaral Practice') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ action('UsersController@index',3) }}" >{{ __('Anesthetists') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ action('UsersController@index',4) }}" >{{ __('Nurse') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ action('UsersController@index',5) }}" >{{ __('Surgeons') }}</a>
                                    </li>

            </ul>
          
            <!-- Tab panes -->
         
          </div>
        
          <main>
            @yield('content')
        </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
</body>
</html>