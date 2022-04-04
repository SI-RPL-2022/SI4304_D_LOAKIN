<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="auth.css">
  <title>Login Driver | Loak In </title>
  <link rel="icon" type="image/png" href="{{asset('logoatas.png')}}">
</head>

<body style="background-color: #F58814">
    <div class="container">
        <div class="row d-flex justify-content-center mt-4 h-100 align-items-center">
            <div class="col-12 col-md-12 col-lg-12 col-xl-8">
                <div class="card " style="border-radius: 15px;">
                    
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-danger alert-block" style="margin-top: 10px">   
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <center><img src="{{asset('loginadmin.png')}}" class="img-fluid mb-4" width="400"  alt=""></center>
                        <form action="{{route('proses_logindriver')}}" method="POST" >
                            {{ csrf_field() }}

                            <h3 class="text-center mb-4" style="color: #F58814">Login</h3>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            
                            <button type="submit" class="form-control " style="background-color: #F58814; color:white; margin-top: 5%">Masuk</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>