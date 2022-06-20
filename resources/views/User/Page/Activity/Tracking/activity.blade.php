@extends('User.master')

@section('content')
<h2 class="mt-4" style="font-family: 'Nunito'; font-style: italic; font-weight:900; color:#D77409; text-align:center;  line-height: 52px; text-shadow: 3px 2px #FDE0C3;">Activity Loak.in</h2>

<div class="container mt-4 justify-content-center" id="cont" style="font-family: 'Segoe UI', Arial, sans-serif;">
        <div class="cont">
        <div class="isitabel">
        <div class="row mt-4 mb-4">
                    <div class="col-6" >
                        <div class="d-grid gap-2">
                            <a href="{{route('activityloakin.loakintrack')}}" class="btn mb-2" style="background-color:#F8A44C;border-radius:5px; font-color: black; font-weight:500" type="button">Data Order Loak.In</a>
                        </div>
                    </div>
                    <div class="col-6" >
                        <div class="d-grid gap-2">
                            <a href="{{route('activityloakin.shoptrack')}}" class="btn mb-2" style="background-color:#F8A44C;border-radius:5px; font-color: black; font-weight:500" type="button">Data Order Loak.In Shop</a>
                        </div>
                    </div>
                </div>    
    @if($order->isEmpty())
        <center><h5>Yahhhh.... Belum ada order loakin nih...</h5></center>
        <div class="d-grid gap-2" style="padding-left: 20%; padding-right: 20%; margin-top: 30px;margin-bottom:30px;">
            <a href="{{ route('order.orderbaru') }}" class="btn" name="hapus" style="background-color:#F8A44C;font-color:black;border-radius:25px 25px 25px 25px; font-weight:500">Let's Go Order Loak.In!</a>
        </div>
    @else
    <table  class="table table-responsive table-bordered ">
        <thead class="table "style="background-color: #D77409; color: white;">
            <tr>
            <th scope="col"><center>No Order</center></th>
            <th scope="col"><center>Status Order</center></th>
            <th scope="col"><center>Driver Name</center></th>
            <th scope="col"><center>Payment</center></th>
            <th scope="col"><center>Total Price</center></th>
            <th scope="col"><center>Action</center></th>
            </tr>
        </thead>

        <tbody>
            <?php
                $no = 0;
            ?>
            @foreach($order as $or)

            <tr style="font-weight: 400">
                <th >Nomer Order : {{$or->no_order}}</th>
                <td style="text-align: center"><b style="color: red">( {{$or->status}} )</b></td>
                @if($or->id_driver == null)
                    <td style="text-align: center">Belum Dapet Driver</td>
                @else
                    <td style="text-align: center">{{$or->driver->name}}</td>
                @endif
                <td style="text-align: center">{{$or->payment}}</td>
                <td style="text-align: center">@currency($or->total_harga)</td>
                <td style="text-align: center">
                    <a href="{{route('activityloakin.viewtrack', $or->no_order)}}" class="btn btn-outline-light mb-2" style="background-color:#F58814;font-color:white;border-radius:15px; width: 210px; ">TRACK ORDER</a><br>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
        </div>
        </div>
</div>

@endsection