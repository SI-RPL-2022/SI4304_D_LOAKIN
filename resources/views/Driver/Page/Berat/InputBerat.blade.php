@extends('Driver.Master')

@section('content')
<div class="container d-flex justify-content-center mt-3">
            <h2 style="font-family: 'Nunito'; font-style: italic; font-weight:900; color:#D77409; text-align:center; font-size:38px; line-height: 52px; text-shadow: 3px 2px #FDE0C3;">Pick Up Loak.in Aja</h2>
        </div>

    <div class="container mt-4" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px; font-family: 'Segoe UI', Arial, sans-serif;"">
        <div style="margin-left: 20px;margin-right:20px">
            <div class="d-flex align-items-center" style="float:right">
                <a class="pl-3 mr-4">
                    <p class="m-0"><b>Kode Driver : {{session()->get('driver')->kodedriver}}</b></p>
                </a>
            </div><br>
            <?php
                                        $no = 0;
                                    ?>
                                    @foreach($order as $ts)
                                    <?php
                                        $no += 1;
                                    ?>
                <tr>  
            <table class="table-responsive" cellpadding="4" >
                <thead>
                    <tr style="color: #D77409">
                        <td scope="col" colspan="5">
                            <h4 style="color: #D77409">
                                <i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 20px"></i><a class="text-reset" style="text-decoration:none;"><b>Pick Up Address</b></a>
                            </h4>
                        </td>
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
    

    <div class="mt-4" style="padding-bottom: 6%" style="font-family: 'Segoe UI', Arial, sans-serif;">
        <form action="{{ route('inputberat.inputdetail', $ts->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf
            <div style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
                <h4 style="color: #D77409; margin-left:20px; margin-bottom:24px; margin-top: 16px;"> 
                    <i class="fa fa-balance-scale" aria-hidden="true" style="margin-right: 16px"></i><a class="text-reset" style="text-decoration:none;"><b>Detail Item</b></a>
                </h4>
                <div style="margin-left: 50px;margin-right:40px">
                    <div class="mb-3">
                        <label for="desc" class="form-label"><b>Item Description</b> (Ex : TV, paper,etc)</label>
                        <input type="text" class="form-control" id="desc" style="border-width:0 0 1px 0;box-shadow:none" value="{{old('item_asli')}}" name="item_asli" id="item_asli"  placeholder="Kardus">
                    </div>
                    <div class="mb-3">
                        <label for="weight" class="form-label"><b>Weight</b> (Approximately in Kg)</label>
                        <input type="text" class="form-control" id="weight" style="border-width:0 0 1px 0;box-shadow:none" value="{{old('berat_asli')}}" name="berat_asli" id="berat_asli"  placeholder="0.5">
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row-reverse" style="margin-top: 30px;">
				<button class="btn" type="submit" style="background-color:#F58814;color:white;border-radius:7px 7px 7px 7px;width:15rem">NEXT</button>
			</div>
        </form>
        
    </div>@endforeach

@endsection