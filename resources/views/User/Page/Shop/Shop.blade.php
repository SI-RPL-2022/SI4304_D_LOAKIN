@extends('User.master')

@section('content')
    <div class="pt-3" style="font-family: 'Segoe UI', Arial, sans-serif;">
        <div class="row mt-4 mb-4">
            <div class="col-6" >
                <div class="d-grid gap-2">
                    <a href="" class="btn mb-2" style="background-color:rgb(241, 60, 90);border-radius:5px;color: white; font-weight:500;" type="button"><i class="fa fa-heart" aria-hidden="true" style="margin-right: 10px"></i>Favorite</a>
                </div>
            </div>
            <div class="col-6" >
                <div class="d-grid gap-2">
                    <a href="" class="btn mb-2" style="background-color:#F2B87A;border-radius:5px; font-color: black; font-weight:500;" type="button"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 10px"></i>My Cart</a>
                </div>
            </div>
        </div>  
        <img src="https://drive.google.com/uc?export=view&id=1rombM23nFmTjJ2QlYspO0Y41L5Yvb1fX" alt="banner" width="100%">
        </div>
        <div class="container" style="font-family: 'Segoe UI', Arial, sans-serif;">
        
            <div class="row pt-3">
            @if ($message = Session::get('success'))
                <div class="alert alert-danger alert-block" style="margin-top: 10px">   
                    <strong>{{ $message }}</strong>
                </div>
            @endif
                @foreach($produk as $pr)
                <div class="col-lg-3 justify-content-center pt-5">
                    <form>
                            <div class="card" style="width: 15rem; margin-bottom:20px">
                                <img src="{{ asset('dataproduk/' . $pr->foto_produk) }}" class="card-img-top" height="200px">
                                <div class="card-body">
                                    <a href="#" style="text-decoration: none; color: black;">
                                        <h5 class="card-title">{{$pr->nama_produk}}</h5>
                                    </a>
                                    <p class="card-text" style="color:red;font-weight:500 ">Rp {{$pr->harga}}</p>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{route('shop.detail', $pr->id)}}" class="btn btn-outline-light" style="background-color:#F58814;font-color:white;width:50%;border-radius:25px 25px 25px 25px" type="submit" name="submit"><i class="fa fa-plus" aria-hidden="true" style="margin-right: 10px"></i> Buy</a>
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