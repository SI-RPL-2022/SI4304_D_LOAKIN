@extends('User.master')

@section('content')

    <div class="container d-flex justify-content-center mt-3">
        <h1 style="font-family: 'Montserrat';color:#D77409"><b>Ubah Alamat</b></h4>
    </div>
    @if($alamat->isEmpty())
    <center>
        <h5>BELOM ADA ALAMAT TAMBAHAN NIH...</h5>
        <div class="col-md-3">
            <a href="{{route('account.alamat', $account->id)}}" class="btn btn-outline-light " style="background-color:#F58814;font-color:white; width:100%" type="submit" name="submit">
            <i class="fa fa-plus" aria-hidden="true" style="margin-right: 10px"></i> Tambah Alamat</a>
        </div>
    </center>
    @else
    <div class="container">
        <form method="POST" action="{{ route('order.neworder') }}" enctype="multipart/form-data">
        @csrf
        @foreach($alamat as $al)
            <div class="mt-3" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
                <div class="form-check">
                    <input class="form-check-input " type="radio" id="alamat" name="alamat" value="{{$al->alamat}}">
                    <label class="form-check-label" for="alamat1">
                        <div>
                            <table class="table-responsive" cellpadding="5">
                                <tbody>   
                                    <tr>
                                        <td></td>
                                        <td ><b>{{$al->user->name}}</b></td>
                                        <td rowspan="2">{{$al->alamat}}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><b>{{$al->user->telepon}}</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </label>
                </div>
            </div>
            
        @endforeach
        <div class="d-flex flex-row-reverse mt-4">
				<button class="btn" type="submit" style="background-color:#F58814;color:white;border-radius:7px 7px 7px 7px;width:15rem">NEXT</button>
			</div>
        </form>
    </div>
    @endif

@endsection