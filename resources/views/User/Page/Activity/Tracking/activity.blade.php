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
                <th style="">Nomer Order : {{$or->no_order}}</th>
                <td style="text-align: center"><b style="color: red">( {{$or->status}} )</b></td>
                @if($or->id_driver == null)
                    <td style="text-align: center">Belum Dapet Driver</td>
                @else
                    <td style="text-align: center">{{$or->driver->name}}</td>
                @endif
                <td style="text-align: center">{{$or->payment}}</td>
                <td style="text-align: center">Rp {{$or->total_harga}}</td>
                <td style="text-align: center">
                    <a href="{{route('activityloakin.viewtrack', $or->no_order)}}" class="btn btn-outline-light mb-2" style="background-color:#F58814;font-color:white;border-radius:15px; width: 210px; ">TRACK ORDER</a><br>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        </div>
        </div>
    </div>

@endsection