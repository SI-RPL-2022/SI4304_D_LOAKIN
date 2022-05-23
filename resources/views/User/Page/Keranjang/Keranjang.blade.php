@extends('User.master')
<script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
@section('content')

<div class="container mt-5 justify-content-center" id="cont">
<h2 class="text-center fw-bold fst-italic" style="color: rgb(239,136,48)">Keranjang Saya</h2>

        <div class="d-grid gap-2" style="padding-left: 20%; padding-right: 20%; margin-top: 30px;margin-bottom:30px;">
            <a href="{{ route('home.index') }}" class="btn btn-outline-light" name="hapus" style="background-color:#F58814;font-color:white;border-radius:25px 25px 25px 25px;">Belanja Lagi Yuk</a>
        </div>
    
        <div class="cont">
        <div class="isitabel">
    <table  class="table table-responsive table-bordered ">
        <thead class="table " style="background-color: #F58814">
            <tr>
            <th scope="col"><center>No</center></th>
            <th scope="col"><center>Gambar</center></th>
            <th scope="col"><center>Nama Produk</center></th>
            <th scope="col"><center>Jumlah</center></th>
            <th scope="col"><center>Harga</center></th>
            <th scope="col"><center>Aksi</center></th>
            </tr>
        </thead>

        <tbody>
        
            <tr>  
                <th scope="row" style="line-height: 8rem; text-align: center"></th>
                <td style="line-height: 8rem;text-align: center"><center><img src="" alt="foto" class="img-fluid" style="height: 8rem; padding-right: 0;"><center></td>
                <td style="line-height: 8rem;text-align: center"></td>
                <td style="line-height: 8rem;text-align: center"></td>
                <td style="line-height: 8rem;text-align: center"></td>
                <td style="line-height: 8rem;text-align: center"><center>
                    <a class="btn btn-danger" href="" onclick="return confirm('Are you sure?')" style="font-color:white;width:80%;border-radius:25px 25px 25px 25px;margin-top: 3rem">Hapus</a>
                </center></td>
            </tr>
        </tbody>
    </table>
    <div class="mt-5">

        <div class="card border-2 mb-3 mt-3 w-100 mx-auto rounded p-5" style="border-color:rgb(239,136,48) ">
            <div class="row">
                <div class="col-8">
                    <h4>Total Harga</h4>
                </div>
                <div class="col-2">
                    <h4 class="text-danger">Rp. 150.000</h4>
                </div>
                <div class="col">

                        <button style="background-color: rgb(239,136,48)" class="btn btn-md text-white w-100 align-right">Checkout</button>

                </div>
            </div>
        </div>
    </div>
        </div>
        </div>
    </div>

@endsection
