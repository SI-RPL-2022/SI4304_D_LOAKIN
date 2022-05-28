@extends('User.master')

@section('content')
<h2 class="mt-4" style="font-family: 'Nunito'; font-style: italic; font-weight:900; color:#D77409; text-align:center;  line-height: 52px; text-shadow: 3px 2px #FDE0C3;">Status Pemesanan</h2>

<div class="container mt-4 justify-content-center" id="cont">
        <div class="cont">
        <div class="isitabel">
        <div class="row mt-4 mb-4">
                    <div class="col-6" >
                        <div class="d-grid gap-2">
                            <a href="{{route('activityloakin.loakintrack')}}" class="btn btn-primary" type="button">Data Order Loak.In</a>
                        </div>
                    </div>
                    <div class="col-6" >
                        <div class="d-grid gap-2">
                            <a href="{{route('activityloakin.shoptrack')}}" class="btn btn-primary" type="button">Data Order Loak.In Shop</a>
                        </div>
                    </div>
                </div>    
    <table  class="table table-responsive table-bordered ">
        <thead class="table "style="background-color: #F58814">
            <tr>
            <th scope="col"><center>No Order</center></th>
            <th scope="col"><center>Status Order</center></th>
            <th scope="col"><center>Nama Driver</center></th>
            <th scope="col"><center>Pembayaran</center></th>
            <th scope="col"><center>Total Harga</center></th>
            <th scope="col"><center>Aksi</center></th>
            </tr>
        </thead>

        <tbody>
            {{-- jdjd --}}
            <?php
                $no = 0;
            ?>
            @foreach($order as $or)

            <tr>
                <th colspan="4" style="line-height: 3rem">Nomer Order : {{$or->no_order}} <b style="color: red">( {{$or->status}} )</b></th>
                <th style="line-height: 3rem"><center>Total : Rp {{$or->total}} </center></th>
                @if ($or->status == 'On Prosess')
                    <td style="line-height: 3rem"><center><a class="btn btn-outline-light" href="" style="background-color:#F58814;font-color:white;border-radius:25px 25px 25px 25px">Bayar Sekarang</a></center></td>
                @elseif($or->status == 'Confirmed')
                    <td style="line-height: 3rem"><center><a class="btn btn-outline-light" href="" style="background-color:#F58814;font-color:white;border-radius:25px 25px 25px 25px">Cetak Nota</a></center></td>
                @elseif($or->status == 'Barang Kirim')
                    <td style="line-height: 3rem"><center><a class="btn btn-outline-light" href="" style="background-color:#F58814;font-color:white;border-radius:25px 25px 25px 25px">Barang Sampai</a></center></td>
                @elseif($or->status == 'Sudah Upload Bukti Pembayaran')
                    <td style="line-height: 3rem"><center><div class="btn btn-outline-light" style="background-color:#F58814;font-color:white;border-radius:25px 25px 25px 25px">Waiting List</div></center></td>
                @elseif($or->status == 'Selesai')
                    <td style="line-height: 3rem"><center><a href="" class="btn btn-outline-light" style="background-color:#F58814;font-color:white;border-radius:25px 25px 25px 25px">Review Product</a>
                    <a class="btn btn-outline-light" href="" style="background-color:#F58814;font-color:white;border-radius:25px 25px 25px 25px">Cetak Nota</a></center></td>
                @endif
            </tr>
            
            @foreach($order as $ts)
                @if($ts -> no_order == $or -> no_order)
                <?php
                    $no += 1;
                ?>
                    <tr>
                        <th scope="row" style="line-height: 8rem; text-align: center">{{$no}}</th>
                        <td style="line-height: 8rem;text-align: center"><center><img src="{{ asset('dataproduk/' . $ts->produk->foto_produk) }}" alt="foto" class="img-fluid" style="height: 8rem; padding-right: 0;"><center></td>
                        <td style="line-height: 8rem;text-align: center">{{$ts->produk->nama_produk}}</td>
                        <td style="line-height: 8rem;text-align: center">{{$ts->jumlah}}</td>
                        <td style="line-height: 8rem;text-align: center">Rp {{$ts->produk->harga * $ts->jumlah}}</td>
                        <td style="line-height: 8rem;text-align: center">{{$ts->status}}</td>
                    </tr>
                    @endif
                @endforeach
            @endforeach
        </tbody>
    </table>
        </div>
        </div>
    </div>

@endsection