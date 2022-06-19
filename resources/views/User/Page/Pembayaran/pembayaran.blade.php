@extends('User.master')

@section('content')
    <div class="container mt-4" style="border-style:solid; border-width:1px; border-color:#F58814;border-radius: 10px; padding:10px;">
        <div style="margin-left: 30px">
        
            
            <form class="form form-horizontal" action="{{ route('bayar.updateimg', $bayar->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <center><h4>No Order : {{$bayar->no_order}}</h4></center>
                <h6 class="mt-2 pb-4"><b>Upload Proof of Payment</b></h6>
                <img src="https://drive.google.com/uc?export=view&id=10Yp9_5oSnFaXsitEkZXCRaT6d64l28J2" width="90" height="24" alt="">
                <p class="mt-3"><b>Mandiri Bank</b></p>
                <br>
                <p>Account Number </p>
                <p style="color: red">896 0819 1017 5601</p>
                <br>
                <p style="font-size:14px">Payment Time is only 10 minutes</p>
                <p style="color: blue; font-size:14px;">The account number owner's name is Haikal Putra</p>
                <div class="mb-3">
                    <input type="file" class="form-control" value="{{old('foto')}}" name="foto" >
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-top: 30px;">
                    <button type="submit" class="btn p-2 bd-highlight" style="background-color:#F58814;color:white;border-radius:7px;width:15rem;">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection