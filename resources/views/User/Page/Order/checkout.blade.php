@extends('User.master')

@section('content')

    <div class="container d-flex justify-content-center mt-3">
        <h1 style="font-family: 'Montserrat';color:#D77409"><b>Loak.in Aja</b></h4>
    </div>

    <div class="container mt-4" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
        <div style="margin-left: 20px;margin-right:20px">
        <div class="row">
            <div class="col-lg-10"><h4 style="color: #D77409">Alamat Pengambilan</h4></div>
            <div class="col-lg-2 d-flex justify-content-end"><h5><b><a href="" style="color: #D77409;text-decoration:none" data-bs-toggle="modal" data-bs-target="#exampleModal">UBAH</a></b></h5></div>
        </div>
            
            <div class="row">
                @foreach($user as $us)  
                <div class="col-lg-4">
                    <p><b>{{$us->name}}</b></p>
                    <p><b>{{$us->telepon}}</b></p>
                </div>
                <div class="col-lg-6">
                    {{$us->alamat}}
               
                </div>
                <div class="col-lg-2">
                
                </div>
                @endforeach
                    </div>   
            
        </div>
    </div>
    @foreach($order as $or) 
    <div class="mt-4">
            
            <div style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
                <h5 style="color: #D77409; margin-left:20px"><b>Item Details</b></h5>
                <div style="margin-left: 50px;margin-right:40px">
                    
                    <div class="mb-3">
                        <label for="weightm" class="form-label"><b>Nomor Order</b></label>
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