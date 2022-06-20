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
        {{-- Judul --}}
        <div class="container d-flex justify-content-center mt-3">
            <h2 style="font-family: 'Nunito'; font-style: italic; font-weight:900; color:#D77409; text-align:center; font-size:38px; line-height: 52px; text-shadow: 3px 2px #FDE0C3;">Tracking Loak.in Aja</h2>
        </div>
        @foreach($order as $ts)
        {{-- time,address --}}
        <div class="container mt-4" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px; font-family: 'Segoe UI', Arial, sans-serif; font-weight:500">
            {{-- adress --}}
            <div class="mt-4" style="margin-left: 20px;margin-right:20px">
                <div class="row">
                    <div class="col-lg-10">
                        <h4 style="color: #D77409">
                            <i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 20px"></i><a class="text-reset" style="text-decoration:none;"><b>Pick Up Address</b></a>
                        </h4>
                    </div>
                </div>

                

                <div class="row">
                    <div class="col-lg-5 mt-2" style="margin-left:35px; font-weight:600;">
                        <p>{{$account->name}}</p>
                        <p>{{$account->telepon}}</p>
                    </div>
                    <div class="col-lg-6 mt-2">
                    @if($ts->alamat == null)
                        <b>{{$ts->user->alamat}}</b>
                    @else
                        <b>{{$ts->alamat}}</b>
                    @endif
                
                    </div>
                </div>
                
                {{-- Status waktu --}}
                <div class="row">
                    <div class="col-lg-10">
                        <h4 style="color: #D77409">
                            <i class="fa fa-clock-o" aria-hidden="true" style="margin-right: 16px"></i><a class="text-reset" style="text-decoration:none;"><b>Status</b></a>
                        </h4>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-5 mt-2" style="margin-left:35px; font-weight:600;">
                        <p>{{$ts->status}} </p>
                    </div> 
                    <div class="col-lg-6 mt-2">
                        @if($ts->status == 'Pesanan Selesai')
                        @else
                        <p>{{date('h:i:s', strtotime('now') - strtotime($ts->updated_at))}}</p>
                        @endif
                    </div>
                </div>

            </div>   
        </div>

        @if($ts->id_driver == null)
        <div class="mt-4" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px; font-family: 'Segoe UI', Arial, sans-serif; font-weight:500">
                <center><div class="loader mt-4 mb-4 "></div></center>
                <h5 class="card-title" style="font-weight:bold; text-align: center; color:#F58814">No. Order : <b style="color: black">{{$ts->no_order}}</b></h5>
                <p class="card-text mb-5" style="font-size:20px; font-weight: 400; text-align: center;">Wait a minute... Admin is looking for a driver for you...</p>
        </div>
        @else
        {{-- Contact Driver --}}
        <div class="mt-4" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px; font-family: 'Segoe UI', Arial, sans-serif; font-weight:500">
            <h4 style="color: #D77409; margin-left:20px; margin-bottom:24px;margin-top: 16px;"> 
                <i class="fa fa-user" aria-hidden="true" style="margin-right: 16px"></i><a class="text-reset" style="text-decoration:none;"><b>Contact Driver</b></a>
            </h4>

            <div style="margin-left: 55px;margin-right:40px;">
            
                <div class="mb-3">
                    <label for="weightm" class="form-label"><b>Driver Code</b></label>
                    <p>{{$ts->driver->kodedriver}}</p>
                </div>
                <div class="mb-3">
                    <label for="weightm" class="form-label"><b>Driver Name</b></label>
                    <p>{{$ts->driver->name}}</p>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label"><b>Driver Number</b></label>
                    <p>{{$ts->driver->nomortelepon}}</p>
                </div>
                <div class="mb-3">
                    <label for="weight" class="form-label"><b>Chat with Driver</b></label>
                    <p style="color: rgb(7, 166, 7)"><i class="fa fa-whatsapp" aria-hidden="true" style="margin-right: 10px"></i><a class="text-reset" href="https://wa.me/081911111111" style="text-decoration:none;" target="_blank">Whatsapp</a></p>
                </div>
            
            </div>

        </div>

        {{-- Detail Item Estimation --}}
        <div class="mt-4" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px; font-family: 'Segoe UI', Arial, sans-serif; font-weight:500">
            <h4 style="color: #D77409; margin-left:20px; margin-bottom:24px; margin-top: 16px;"> 
                <i class="fa fa-balance-scale" aria-hidden="true" style="margin-right: 16px"></i><a class="text-reset" style="text-decoration:none;"><b>Detail Item Estimation</b></a>
            </h4>

            <div style="margin-left: 55px;margin-right:40px;">
                <div class="mb-3">
                    <label for="weightm" class="form-label"><b>Weight Measure</b></label>
                    <p>{{$ts->tipeweight}}</p>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label"><b>Item Estimation</b> (Ex : TV, paper, etc)</label>
                    <p>{{$ts->items}}</p>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label"><b>Original Item</b></label>
                    <p>{{$ts->item_asli}}</p>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label"><b>Weight Estimation</b> (more or less)</label>
                    <p>{{$ts->weight}} Kg</p>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label"><b>Original Weight</b></label>
                    <p>{{$ts->berat_asli}} Kg</p>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label"><b>Payment</b></label>
                    <p>{{$ts->payment}}</p>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label"><b>Total Price</b></label>
                    <p>@currency($ts->total_harga)</p>
                </div>
            </div>
            
        </div>

        @endif
        
        @endforeach

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("May 8, 2022 17:30:59").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Output the result in an element with id="demo"
          document.getElementById("demo").innerHTML = minutes + " menit lagi" + ". Tunggu yaa";
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Drivermu sudah sampai";
          }
        }, 1000);
        </script>
        
@endsection