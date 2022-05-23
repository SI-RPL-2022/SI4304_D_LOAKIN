@extends('User.master')

@section('content')
    <div class="pt-3">
        <img src="https://drive.google.com/uc?export=view&id=1rombM23nFmTjJ2QlYspO0Y41L5Yvb1fX" alt="banner" width="100%">
        </div>
        <div class="container">
            <div class="row pt-3">
                @foreach($produk as $pr)
                <div class="col-lg-3 justify-content-center pt-5">
                    <form>
                            <div class="card" style="width: 15rem; margin-bottom:20px">
                                <img src="{{ asset('dataproduk/' . $pr->foto_produk) }}" class="card-img-top" height="200px">
                                <div class="card-body">
                                    <a href="#" style="text-decoration: none; color: black;">
                                        <h5 class="card-title">{{$pr->nama_produk}}</h5>
                                    </a>
                                    <p class="card-text" style="color:red">Rp {{$pr->harga}}</p>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{route('shop.detail', $pr->id)}}" class="btn btn-outline-light" style="background-color:#F2B87A;font-color:white;width:50%;border-radius:25px 25px 25px 25px" type="submit" name="submit"><i class="fa fa-plus" aria-hidden="true" style="margin-right: 10px"></i> Beli</a>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
@endsection