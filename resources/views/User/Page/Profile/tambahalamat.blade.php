@extends('User.Master')

@section('content')
    
    <div class="container d-flex justify-content-center mt-3">
        <h1 style="font-family: 'Montserrat';color:#D77409"><b>Tambah Alamat</b></h4>
    </div>

    <div class="container mt-4">
        <form method="post">
            <div style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
                <div class="mt-2" style="margin-left: 30px;margin-right:40px">
                    <div class="mb-3">
                        <label for="nama" class="form-label"><b>Nama Lengkap</b></label>
                        <input type="text" class="form-control" id="nama" style="border-width:0 0 1px 0;box-shadow:none" placeholder="Lucas">
                    </div>
                    <div class="mb-3">
                        <label for="notlp" class="form-label"><b>Nomor Telepon</b></label>
                        <input type="number" class="form-control" id="notlp" style="border-width:0 0 1px 0;box-shadow:none" placeholder="081232876816">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label"><b>Alamat</b></label>
                        <input type="text" class="form-control" id="alamat" style="border-width:0 0 1px 0;box-shadow:none" placeholder="Jalanin dulu yang ada">
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row-reverse" style="margin-top: 30px;">
				<button class="btn" type="submit" style="background-color:#F58814;color:white;border-radius:7px 7px 7px 7px;width:15rem">Submit</button>
			</div>
        </form>
    </div>
  
@endsection