@extends('Driver.Master')

@section('content')
    <div class="container d-flex justify-content-center mt-3">
        <h2 style="font-family: 'Nunito'; font-style: italic; font-weight:900; color:#D77409; text-align:center; font-size:38px; line-height: 52px; text-shadow: 3px 2px #FDE0C3;">Pick Up Loak.in Aja</h2>
    </div>

    <div class="container mt-4" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
        <div style="margin-left: 20px;margin-right:20px">
            <div class="d-flex align-items-center" style="float:right">
                <a class="pl-3 mr-4">
                    <p class="m-0"><b>Kode Driver : {{session()->get('driver')->kodedriver}}</b></p>
                </a>
            </div>
            <?php
                                        $no = 0;
                                    ?>
                                    @foreach($order as $ts)
                                    <?php
                                        $no += 1;
                                    ?>
            <table class="table-responsive" cellpadding="4">
                <thead>
                    <tr style="color: #D77409">
                        <td scope="col" colspan="5"><h5><b>Alamat Pengambilan</b></h5></td>
                    </tr>
                </thead>
                <tbody>   
                    <tr>
                        <td colspan="1" ><b>{{$ts->user->name}}</b></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td rowspan="2" colspan="2">{{$ts->user->alamat}}</td>
                    </tr>
                    <tr>
                        <td><b>{{$ts->user->telepon}}</b></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4" style="padding-bottom: 6%">
            <div style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
                <h5 style="color: #D77409; margin-left:20px"><b>Item Details</b></h5>
                <div style="margin-left: 50px;margin-right:40px">
                    <div class="mb-3">
                        <label for="desc" class="form-label"><b>Item Description</b> (Ex : TV, paper,etc)</label>
                        <p>{{$ts->item_asli}}</p>
                    </div>
                    <div class="mb-3">
                        <label for="weight" class="form-label"><b>Weight</b> (Approximately in Kg)</label>
                        <p>{{$ts->berat_asli}}</p>
                    </div>
                    <div>
                        <label for="pay" class="form-label"><b>Payment</b></label>
                        <p>{{$ts->payment}}</p>
                    </div>
                    <div class="mb-3">
                        <label for="total" class="form-label"><b>Total</b></label>
                        <p>Rp {{$ts->total_harga}}</p> <!-- weight * 3000 -->
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row-reverse" style="margin-top: 30px;">
                <a href="{{route('driver.index')}}" class="btn ms-auto p-2 bd-highlight" onclick="return confirm('Pesanan Selesai - Lanjutkan ke Pembayaran :)')" type="submit" style="background-color:#F58814;color:white;border-radius:7px 7px 7px 7px;width:15rem">LOAK.IN AJA</a>
			</div>
    </div>
@endforeach
@endsection