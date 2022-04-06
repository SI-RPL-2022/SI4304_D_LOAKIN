<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> Profile Loakin </title>
  </head>

  
  <body>
    <div class="container mt-5">
    <div class="card mx-5 my-5" style="width: 18rem;">
      <div class="card-body">
        <img class="card-img-top mx-5">
        <h5 class="card-title">
          <div class="col-sm-5">
            <input type="text" class="form-control-plaintext" name="nama" value="Olivia">
        </div>
        </h5>
        <p class="card-text"> 10 | Times using Loakin Aja </p>
        <hr></hr>
        <p> Phone Number </p>
        <div class="col-sm-5">
          <input type="number" class="form-control" name="no_hp" value="081267937770">
      </div>
        <hr></hr>
        <p> Email </p>
        <div class="col-sm-5">
          <input type="text" class="form-control" name="email" value="email">
      </div>
        <hr></hr>
        <p> Bio </p>
        <div class="col-sm-5">
          <input type="text" class="form-control" name="Bio" value="Bio">
      </div>
      <br>
      <div class="form-group row justify-content-center pt-5">
        <button type="submit" class="btn btn-warning btn-block m-2" style="width:180px" name="update">Edit</button>
        <button type="submit" class="btn btn-danger btn-block m-2" style="width:180px" name="cancel">Batal</button>
      </div>
      </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>