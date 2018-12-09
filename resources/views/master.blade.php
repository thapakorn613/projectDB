<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <base href="{{ URL::asset('/') }}" target="_blank">
    <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css')}}">
    
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
   
    <title>pam hospital</title>
  </head>


 

  <body>
      <!-- Image and text -->


  
      <div class="row">
        <div class="col-10">
            <img src="img/logo.png" width="200" height="170"  alt="">
            <img src="img/logo_name.png" width="400" height="170" alt="">
        </div>
        <div class="col-2">

           <img class="img-responsive pull-right" src="img/login.png" width="100" height="100"  alt="">
           <img class="img-responsive pull-right" src="img/exit.png" width="100" height="100"  alt="">
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
          
            <br>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#centersAndClinics">Centers & Clinics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#PatientCare">PatientCare</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#HealthExpert">HealthExpert</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#AboutAs">AboutAs</a>
              </li>
            </ul>
          
            <!-- Tab panes -->
            <div class="tab-content">
                
                <div id="home" class="container tab-pane active">
               
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">{{ __('Register') }}  <a href="{{ route('login') }}">Login</a></div>
                    
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                    
                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    
                                                    @if ($errors->has('name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                    
                    
                    
                    
                                               <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('surname') }}</label>
                    
                                                <div class="col-md-6">
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
                                                    <input id="birthdate" type="text" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="birthday" value="{{ old('birthday') }}" required autofocus>
                    
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
                                                    <input id="gender" type="text" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="{{ old('gender') }}" required autofocus>
                    
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

                </div> 



                <div id="login" class="tab-pane"><br>
                    <h3 class="text-center text-white pt-5">Login form</h3>
                    <div class="container">
                        <div id="login-row" class="row justify-content-center align-items-center">
                            <div id="login-column" class="col-md-6">
                                <div id="login-box" class="col-md-12">
                                    <form id="login-form" class="form" action="" method="post">
                                        <h3 class="text-center text-info">Login</h3>
                                        <div class="form-group">
                                            <label for="username" class="text-info">Username:</label><br>
                                            <input type="text" name="username" id="username" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="text-info">Password:</label><br>
                                            <input type="text" name="password" id="password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                                        </div>
                                        <div id="register-link" class="text-right">
                                            <a href="#" class="text-info">Register here</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
          
              
                    
                    <div id="home2" class=" tab-pane"><br>
           
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
            1 of 2
          </div>
          <div class="col-6">
            <img src="img/11.png">
            <img src="img/21.png">
            <img src="img/31.png">
          </div>
        </div>
     </div>

             
              <div id="centersAndClinics" class=" tab-pane fade bgSkyBlue"><br>
                <center>
                  <img class="img-responsive" src="img/doctorLogoW.png" width="100" height="100"  alt="">
                     </center>
                  <form class="form-inline  d-flex flex-row justify-content-center">
                         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-light" type="submit">Search</button>
                      </form>

                 <div class="container bg-light ">
                  <div class="row">
                    <div class="col-4">
                        <img class="img-responsive rounded mx-auto d-block" src="img/sur.jpg" width="100" height="100"  alt="">
                    </div>
                    <div class="col-4">
                      
                        <img class="img-responsiv rounded mx-auto d-block" src="img/gen.jpg" width="100" height="100"  alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-responsive rounded mx-auto d-block" src="img/ans.png" width="100" height="100"  alt="">
                    </div>
                  </div>
                </div>
            
              </div>

            
            
              <div id="PatientCare" class=" tab-pane fade"><br>
                <h3>Menu 2</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
              </div>

              <div id="HealthExpert" class=" tab-pane fade"><br>
                <h3>Menu 2</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
              </div>

              <div id="AboutAs" class=" tab-pane fade"><br>
                <h3>Menu 2</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
              </div>

             

            </div>
          </div>
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>