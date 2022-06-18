@extends('User.Master')

@section('content')
<h2 class="mt-4" style="font-family: 'Nunito'; font-style: italic; font-weight:900; color:#D77409; text-align:center;  line-height: 52px; text-shadow: 3px 2px #FDE0C3;">Detail</h2>
    @if ($message = Session::get('success'))
        <div class="alert alert-danger alert-block" style="margin-top: 10px">   
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="card mb-3 mt-3 w-100 mx-auto" style="border-style:solid;border-color:rgb(239,136,48);font-family: 'Segoe UI', Arial, sans-serif;">
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
                    <h4 style="color: black; font-weight:500">{{$produk->nama_produk}}</h4>
                    <h5 class="text-danger" style="font-weight:500">Rp. {{$produk->harga}}</h5>

                    <h5 class="mt-5" style="font-weight:400">Description : </h5>
                    <h6 style="font-weight:400">
                    {{$produk->detail_produk}}
                    </h6>

                
            </div>
        </div>

    </div>
    <div class="row mt-4 mb-4" style="font-family: 'Segoe UI', Arial, sans-serif;">
        <div class="d-flex justify-content-end">
            <a href="" class="w-25 btn btn-outline-light md-2" style="background-color:rgb(241, 60, 90);border-radius:5px;color: white; font-weight:500;margin-right: 3%" type="button"><i class="fa fa-heart" aria-hidden="true" style="margin-right: 10px"></i>Add to Favorite</a>
            <a href="" style="background-color:rgb(239,136,48);border-radius:5px;color: white; font-weight:500;" class="btn btn-md w-25 align-right" type="button"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 10px"></i>Add to Cart</a>
        </div>
    </div>  
@endsection