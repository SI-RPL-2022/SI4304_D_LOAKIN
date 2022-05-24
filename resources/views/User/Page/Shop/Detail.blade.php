@extends('User.Master')

@section('content')
    <h2 class="text-center fw-bold fst-italic" style="color: rgb(239,136,48)">Detail Produk</h2>

    <div class="card border-4 mb-3 mt-3 w-100 mx-auto rounded" style="border-color:rgb(239,136,48) ">
        <div class="row p-5 pt-3">
            <div class="col-5 mt-4">
                    <img
                        src="{{ asset('dataproduk/' . $produk->foto_produk) }}"
                        alt="Sample photo"
                        class="img-fluid "
                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
                    />
            </div>
            <div class="col mt-4">
                    <h5 class="fw-bold" style="color: rgb(239,136,48)"> {{$produk->nama_produk}}</h5>
                    <p class="fw-bold text-danger">Rp. {{$produk->harga}}</p>

                    <p class="mt-5">
                    {{$produk->detail_produk}}
                    </p>

                <h5 class="fw-bold mt-5" style="color: rgb(239,136,48)"> Spesifikasi Produk</h5>
                <div class="mt-2">
                   <p>Bahan Tas : Kulit Tas
                    <br>Ukuran Tas: 190cm x 200cm
                       <br> Warna Tas: Putih Tulang
                   <br>Warna Tali Tas : Coklat Tua
                   <br>Pemakaian: 2 Bulan
                    <br>Cacat: Terdapat Noda Garis Hitam Di bawah
                    <br>Tambahan: Dusk Bag dan Kotak
                    <br>Dikirim Dari : Jakarta</p>

                    <p class="mt-2">Dijami Original!!
                    <br>Cocok Digunakan segala umru
                    <br>Warna Sesuai Gambar</p>
                </div>
            </div>
        </div>

    </div>
    <div class="d-flex justify-content-end">
        <a href="{{ route('cart.create', $produk->id) }}" style="background-color: rgb(239,136,48)" class="btn btn-md text-white w-25 align-right">Masukan keranjang</a>
    </div>
@endsection