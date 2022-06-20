@extends('User.Master')

@section('content')

    <center><div class="container mt-3 ">
        <h2 style="font-family: 'Nunito'; font-style: italic; font-weight:900; color:#D77409; font-size:38px; line-height: 52px; text-shadow: 3px 2px #FDE0C3;">Checkout</h2>
    </div></center>

    <div class="mt-4" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px; font-family: 'Segoe UI', Arial, sans-serif;">
        <h4 style="color: #D77409; margin-left:20px; margin-bottom:24px; margin-top: 16px;"> 
            <i class="fa fa-user-circle" aria-hidden="true" style="margin-right: 16px"></i><a class="text-reset" style="text-decoration:none;"><b>Detail Customer</b></a>
        </h4>

        <div style="margin-left: 64px;margin-right:40px; font-weight:500">
        @foreach($user as $us)
            <div class="mb-3">
                <p>{{$us->name}}</p>
            </div>
            <div class="mb-3">
                <p>{{$us->telepon}}</p>
            </div>
            <div class="mb-3">
                <p>{{$us->alamat}}</p>
            </div>
            <div class="mb-3" style="color: red; font-weight:400">
                <h6>*Shipping using JnT</h6>
            </div>
        @endforeach
        </div>

    </div>

    <div class="mt-4" style=" font-family: 'Segoe UI', Arial, sans-serif;">
        <table class="table table-responsive table-bordered">
            <thead style="background-color: #D77409;color:white;">
                <tr>
                    <th scope="col"><center><b>No</b></center></th>
                    <th scope="col"><center><b>Image</b></center></th>
                    <th scope="col"><center><b>Product Name</b></center></th>
                    <th scope="col"><center><b>Qty</b></center></th>
                    <th scope="col"><center><b>Price</b></center></th>
                </tr>
            </thead>
    
            <tbody>
            <?php
                    $no = 0;
                ?>
                
                    @foreach($trans as $ts)
                        <?php
                            $no += 1;
                        ?>
                <form class="form form-horizontal" action="{{ route('checkoutshop.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <tr style="font-weight: 400" >  
                    <th scope="row" style="line-height: 8rem; text-align: center">{{$no}}</th>
                    <td style="line-height: 8rem;text-align: center"><img src="{{ asset('dataproduk/' . $ts->produk->foto_produk) }}" width="200" height="" alt=""></td>
                    <td style="line-height: 8rem;text-align: center">{{$ts->produk->nama_produk}}</td>
                    <td style="line-height: 8rem;text-align: center">{{$ts->jumlah}}</td>
                    <td style="line-height: 8rem;text-align: center">@currency($ts->produk->harga * $ts->jumlah)</td>
                
                </tr>

                @endforeach
                <tr>
                    <th colspan="4">Total</th>
                    <th style="text-align: center; color: red;">@currency($tot)</th>
                </tr>
                    
            </tbody>

        </table>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-top: 30px;">
        <button type="submit" class="btn p-2 bd-highlight" style="background-color:#F58814;color:white;border-radius:7px;width:15rem;">CHECKOUT</button>
    </div>
</form>
@endsection