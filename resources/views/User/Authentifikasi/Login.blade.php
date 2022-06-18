<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Masuk - LOAKIN</title>
    <link rel="icon" type="image/png" href="{{asset('logoatas.png')}}">
    <style>
        
    </style>
  </head>
  <body style="background: #F58814">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card" style="border-radius: 15px; margin-top: 5%;box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;">
                    <div class="card-body p-5">
                        <center><img src="{{asset('logo.png')}}" width="350" height="60" alt="" class="img-fluid"></center><br>
                        <h2 class="text-uppercase text-center mb-5" style="font-family: 'Montserrat'; color: #F58814; "><b>Login</b></h2>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-danger alert-block" style="margin-top: 10px">   
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form action="{{route('proses_loginuser')}}" method="POST" id="logForm">
                            {{ csrf_field() }}

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3cg">Email</label>
                            <input class="form-control py-3" id="inputEmailAddress" name="email" type="email" placeholder="Email"/>
                        </div>
        
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example4cg">Password</label>
                            <input class="form-control py-3" id="inputEmailAddress" name="password" type="password" placeholder="Password"/>
                        </div>
        
        
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-outline-light" name="checkout" type="submit" style="background-color:#F58814;font-color:white;width:100%;border-radius:25px 25px 25px 25px; font-size:18px"><b>Login</b></button>
                        </div>
        
                        <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="{{route('registeruser')}}" class="fw-bold text-body"><u>Register here</u></a></p>
        
                        </form>
        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <center><img src="{{asset('login.png')}}" width="400" height="60" alt="" class="img-fluid  "></center><br>
            </div>
        </div>
        
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
