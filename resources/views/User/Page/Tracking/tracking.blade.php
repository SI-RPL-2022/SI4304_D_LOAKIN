@extends('User.master')

@section('content')
    {{-- Judul --}}
    <div class="container d-flex justify-content-center mt-3">
        <h2 style="font-family: 'Nunito'; font-style: italic; font-weight:900; color:#D77409; text-align:center; font-size:38px; line-height: 52px; text-shadow: 3px 2px #FDE0C3;">Tracking Loak.in Aja</h2>
    </div>

    {{-- time,address --}}
    <div class="container mt-4" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
        {{-- adress --}}
        <div style="margin-left: 20px;margin-right:20px">
            <div class="row">
                <div class="col-lg-10">
                    <h4 style="color: #D77409">
                        <i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 20px"></i><a class="text-reset" style="text-decoration:none;">Pick Up Address</a>
                    </h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 mt-2" style="margin-left:35px; font-weight:600;">
                    <p>Jung Jaehyun</p>
                    <p>(+62)8123456248</p>
                </div>
                <div class="col-lg-6 mt-2">
                    <p>Jl. Telekomunikasi No. 1, Terusan Buahbatu - Bojongsoang, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</p>
               
                </div>
            </div>
            
            {{-- Status waktu --}}
            <div class="row">
                <div class="col-lg-10">
                    <h4 style="color: #D77409">
                        <i class="fa fa-clock-o" aria-hidden="true" style="margin-right: 16px"></i><a class="text-reset" style="text-decoration:none;">Status</a>
                    </h4>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-5 mt-2" style="margin-left:35px; font-weight:600;">
                    <p id='demo'></p>
                </div> 
            </div>

        </div>   
    </div>


    {{-- @foreach($order as $or)  --}}
    <div class="mt-4">
            
            <div style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px;">
                <h5 style="color: #D77409; margin-left:20px"><b>Contact Driver</b></h5>
                <div style="margin-left: 50px;margin-right:40px">
                    
                    <div class="mb-3">
                        <label for="weightm" class="form-label"><b>Nomor Order</b></label>
                        <p>frfr</p>
                    </div>
                    <div class="mb-3">
                        <label for="weightm" class="form-label"><b>Weight Measure</b></label>
                        <p>333</p>
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label"><b>Item Description</b> (Ex : TV, paper,etc)</label>
                        <p>efref</p>
                    </div>
                    <div class="mb-3">
                        <label for="weight" class="form-label"><b>Weight</b> (Approximately in Kg)</label>
                        <p>r33</p>
                    </div>
                    <div>
                        <label for="pay" class="form-label"><b>Payment</b></label>
                        <p>342er4</p>
                    </div>
                    
                </div>
            </div>
            <div class="d-flex" style="margin-top: 30px;">
				<a class="btn p-2 bd-highlight" href="{{ route('order.index') }}" style="background-color:#FBCE9D;border-radius:7px 7px 7px 7px;width:15rem; ">BACK</a>
                <a href="/checkout/update/" class="btn ms-auto p-2 bd-highlight" style="background-color:#F58814;color:white;border-radius:7px 7px 7px 7px;width:15rem;">LOAK.IN AJA</a>
    
            </div>
            
        
    </div>
    {{-- @endforeach --}}

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("May 8, 2022 17:40:00").getTime();
        
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