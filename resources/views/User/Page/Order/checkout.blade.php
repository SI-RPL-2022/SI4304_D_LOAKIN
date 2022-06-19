@extends('User.master')

@section('content')

<div class="container d-flex justify-content-center mt-3">
    <h2 style="font-family: 'Nunito'; font-style: italic; font-weight:900; color:#D77409; text-align:center; font-size:38px; line-height: 52px; text-shadow: 3px 2px #FDE0C3;">Loak.in Aja </h2>
</div>

<div class="container mt-4" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px; font-family: 'Segoe UI', Arial, sans-serif;">
    <div style="margin-left: 20px;margin-right:20px">
    <div class="row">
        <div class="col-lg-10"><h4 style="color: #D77409">
            <h4 style="color: #D77409">
                <i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 20px"></i><a class="text-reset" style="text-decoration:none;"><b>Pick Up Address</b></a>
            </h4>
        </div></div>
        
        <div class="row" style="font-weight: 500; margin-left:25px;">
            @foreach($order as $us)  
            <div class="col-lg-4">
                <p><b>{{$us->user->name}}</b></p>
                <p><b>{{$us->user->telepon}}</b></p>
            </div>
            <div class="col-lg-6">
                @if($us->alamat == null)
                    <b>{{$us->user->alamat}}</b>
                @else
                    <b>{{$us->alamat}}</b>
                @endif
           
            </div>
            <div class="col-lg-2">
            
            </div>
            @endforeach
        </div>   
        
    </div>
</div>

    @foreach($order as $or) 
    <div class="mt-4" style="font-family: 'Segoe UI', Arial, sans-serif;"">
            
            <div style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
                <h4 style="color: #D77409">
                    <i class="fa fa-balance-scale" aria-hidden="true" style="margin-right: 16px"></i><a class="text-reset" style="text-decoration:none;"><b>Detail Item</b></a>
                </h4>
                <div style="margin-left: 50px;margin-right:40px;font-weight: 500;">
                    
                    <div class="mb-3">
                        <label for="weightm" class="form-label"><b>No order</b></label>
                        <p>{{$or->no_order}}</p>
                    </div>
                    <div class="mb-3">
                        <label for="weightm" class="form-label"><b>Weight Measure</b></label>
                        <p>{{$or->tipeweight}}</p>
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label"><b>Item Description</b> (Ex : TV, paper,etc)</label>
                        <p>{{$or->items}}</p>
                    </div>
                    <div class="mb-3">
                        <label for="weight" class="form-label"><b>Weight</b> (Approximately in Kg)</label>
                        <p>{{$or->weight}}</p>
                    </div>
                    <div>
                        <label for="pay" class="form-label"><b>Payment</b></label>
                        <p>{{$or->payment}}</p>
                    </div>
                    
                </div>
            </div>
            <div class="d-flex" style="margin-top: 30px;">
				<a class="btn p-2 bd-highlight" href="{{ route('order.index') }}" style="background-color:#FBCE9D;border-radius:7px 7px 7px 7px;width:15rem; ">BACK</a>
                <a href="/checkout/update/{{$or->id}}" class="btn ms-auto p-2 bd-highlight" style="background-color:#F58814;color:white;border-radius:7px 7px 7px 7px;width:15rem;">LOAK.IN AJA</a>
    
            </div>
            
        
    </div>
    @endforeach
@endsection