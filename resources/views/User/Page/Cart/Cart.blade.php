@extends('User.master')
<script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
@section('content')

<div class="container mt-5 justify-content-center" id="cont">
    <h2 class="mt-4" style="font-family: 'Nunito'; font-style: italic; font-weight:900; color:#D77409; text-align:center;  line-height: 52px; text-shadow: 3px 2px #FDE0C3;">My Cart</h2>

        <div class="d-grid gap-2" style="padding-left: 20%; padding-right: 20%; margin-top: 30px;margin-bottom:30px;">
            <a href="{{ route('shop.index') }}" class="btn" name="hapus" style="background-color:#F8A44C;font-color:black;border-radius:25px 25px 25px 25px; font-weight:500">Let's Go Shopping!</a>
        </div>
    
        <div class="cont">
        <div class="isitabel">
    @if($cart->isEmpty())
        <center><h5>Yahhhh.... Belum ada Produk di Cart</h5></center>
    @else
    <table  class="table table-responsive table-bordered">
        <thead class="table " style="background-color: #D77409; color: white;" >
            <tr>
              <th scope="col" style="text-align: center">No</th>
              <th scope="col" style="text-align: center">Image</th>
              <th scope="col" style="text-align: center">Product Name</th>
              <th scope="col" style="text-align: center">Qty</th>
              <th scope="col" style="text-align: center">Price</th>
              <th scope="col" style="text-align: center">Action</th>
            </tr>
          </thead>

        <tbody>
        {{-- jdjd --}}
        <?php
            $no = 0;
        ?>
            @foreach($cart as $cr)
        <?php
            $no += 1;
        ?>
            <tr>  
                <th scope="row" style="line-height: 8rem; text-align: center">{{$no}}</th>
                <td style="line-height: 8rem;text-align: center"><center><img src="{{ asset('dataproduk/' . $cr->produk->foto_produk) }}" alt="foto" class="img-fluid" style="height: 8rem; padding-right: 0;"><center></td>
                <td style="line-height: 8rem;text-align: center">{{$cr->produk->nama_produk}}</td>
                <td style="line-height: 8rem;text-align: center">{{$cr->jumlah}}
                </td>
                <td style="line-height: 8rem;text-align: center">Rp {{$cr->produk->harga * $cr->jumlah}}</td>
                <td style="line-height: 8rem;text-align: center"><center>
                    <a class="btn btn-danger" href="{{route('cart.delete', $cr->id)}}" onclick="return confirm('Are you sure?')" style="font-color:white;width:80%;border-radius:15px;margin-top: 3rem">Delete</a>
                </center></td>
            </tr>
            @endforeach
            <tr>
                <th colspan="4" style="line-height: 2rem;">Total Belanja</th>
                <th style="line-height: 2rem;text-align: center">Rp {{$tot}}</th>
                <th><center><a href="{{ route('checkoutshop.checkout') }}" class="btn btn-outline-light" name="hapus" style="background-color:#F58814;font-color:white;width:80%;border-radius:7px;">CHECKOUT</a></center></th>
            </tr>
       
        </tbody>
    </table>
    @endif
        </div>
        </div>
    </div>

@endsection
