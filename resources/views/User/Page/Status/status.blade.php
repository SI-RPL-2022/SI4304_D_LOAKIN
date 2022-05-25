@extends('User.master')

<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #F58814;
  width: 200px;
  height: 200px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

@section('content')


<div class="container py-3 bg-white" >
  <h2 style="font-family: 'Nunito'; font-style: italic; font-weight:900; color:#D77409; text-align:center; font-size:38px; line-height: 52px; text-shadow: 3px 2px #FDE0C3;">LET'S MAKE A GREEN EARTH! </h2>
      
  <div class="row mt-4 justify-content-center">
      
    <div class="col d-flex justify-content-center" style="" >
      <div class="card card-block d-flex justify-content-center align-items-center" style=" border-radius: 25px; border-solid:1px; border-color:#D77409;">
        
        
        <div class="card-body ">
        @foreach($order as $or) 
            
            @if ($or->status == 'Fix Order')
                <center><div class="loader mt-4 mb-4 "></div></center>
                <h5 class="card-title" style="font-weight:bold; text-align: center; color:#F58814">No. Order : <b style="color: black">{{$or->no_order}}</b></h5>
                <p class="card-text mb-5" style="font-size:20px; font-weight: 400; text-align: center;">Tunggu Dulu yaa... Admin sedang mencarikan driver untuk kamu...</p>
            
            @elseif ($or->status == 'Driver Menuju Ke Lokasi')
                <center><img class="mb-4" src="{{ asset('oke.png') }}" alt="image" /></center>
                <h5 class="card-title" style="font-weight:bold; text-align: center; color:#F58814">No. Order : <b style="color: black">{{$or->no_order}}</b></h5>
                <p class="card-text mb-5" style="font-size:20px;  font-weight: 400; text-align: center;">Yeay Berhasil Dapet Driver... Silahkan Hubungi Driver & Track Pesananmu</p>
            
            @elseif ($or->status == 'Dibatalkan')
                <center><img class="mb-4" src="{{ asset('oke.png') }}" alt="image" /></center>
                <h5 class="card-title" style="font-weight:bold; text-align: center; color:#F58814">No. Order : <b style="color: black">{{$or->no_order}}</b></h5>
                <p class="card-text mb-5" style="font-size:20px;  font-weight: 400; text-align: center;">Maaf Pesanan Kamu di Batalkan... Silahkan Order Lagi yaaa...</p>
            
            @endif
            
            <center>
                <a href="{{ route('activityloakin.loakintrack') }}" class="btn btn-outline-light mb-2" style="background-color:#F58814;font-color:white;border-radius:15px; width: 210px; ">TRACK ORDER</a><br>
                <a href="{{ route('home.index') }}" class="btn btn-outline-light" style="background-color:#FBCE9D;color:black;border-radius:15px; width: 210px; ">BACK TO HOME</a>
            </center>
          @endforeach
        </div> 
      </div>
    </div> 

  </div>
</div>

@endsection