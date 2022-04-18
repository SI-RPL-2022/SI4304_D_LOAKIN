<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register - LOAKIN</title>
    <link rel="icon" type="image/png" href="{{asset('logoatas.png')}}">
    <style>
        
    </style>
  </head>
  <body style="background: #F58814">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card" style="border-radius: 15px; margin-top: 3%">
                    <div class="card-body p-5">
                        <h2 class="text-uppercase text-center " style="font-family: 'Montserrat'; color: #F58814; "><b>DAFTAR</b></h2>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-danger alert-block" style="margin-top: 10px">   
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form action="{{route('proses_registeruser')}}" method="POST" id="logForm">
                            {{ csrf_field() }}

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3cg">Nama</label>
                            <input class="form-control" id="inputEmailAddress" name="nama" type="text" placeholder="Masukkan Nama"/>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3cg">Email</label>
                            <input class="form-control" id="inputEmailAddress" name="email" type="email" placeholder="Masukkan Email"/>
                        </div>
        
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3cg">Alamat</label>
                            <input class="form-control" id="inputEmailAddress" name="alamat" type="text" placeholder="Masukkan Alamat"/>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3cg">Telepon</label>
                            <input class="form-control" id="inputEmailAddress" name="telepon" type="number" placeholder="Masukkan Telepon"/>
                        </div>
        
                        

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example4cg">Password</label>
                            <input class="form-control" id="inputEmailAddress" name="pass" type="password" placeholder="Masukkan password"/>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example4cg"> Confirmasi Password</label>
                            <input class="form-control" id="inputEmailAddress" name="confpass" type="password" placeholder="Masukkan password"/>
                        </div>
        
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-outline-light" name="checkout" type="submit" style="background-color:#F58814;font-color:white;width:100%;border-radius:25px 25px 25px 25px; font-size:18px"><b>Masuk</b></button>
                        </div>
        
                        <p class="text-center text-muted mt-2 mb-0">have an account? <a href="{{route('loginuser')}}" class="fw-bold text-body"><u>Login here</u></a></p>
        
                        </form>
        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <center><img src="{{asset('regist.png')}}" width="400" height="60" alt="" class="img-fluid  "></center><br>
            </div>
        </div>
        
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
