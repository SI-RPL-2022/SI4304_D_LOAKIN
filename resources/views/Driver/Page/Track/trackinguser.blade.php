@extends('Driver.Master')

@section('content')
            <div class="page-header flex-wrap">
              <div class="header-left">
                
              </div>
              <div class="header-right d-flex flex-wrap mt-md-2 mt-lg-0">
                <div class="d-flex align-items-center">
                  <a href="#">
                    <p class="m-0 pr-3">Dashboard</p>
                  </a>
                  <a class="pl-3 mr-4" href="#">
                    <p class="m-0">{{session()->get('driver')->kodedriver}}</p>
                  </a>
                </div>
              </div>
            </div>

        {{-- Judul --}}
        <div class="container d-flex justify-content-center mt-3">
            <h2 style="font-family: 'Nunito'; font-style: italic; font-weight:900; color:#D77409; text-align:center; font-size:38px; line-height: 52px; text-shadow: 3px 2px #FDE0C3;">Pick Up Loak.in Aja</h2>
        </div>

        @foreach($order as $ts)


        {{-- maps,address --}}
        <div class="container mt-4" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px; font-family: 'Segoe UI', Arial, sans-serif;">
            {{-- adress --}}
            <div style="margin-left: 20px;margin-right:20px">
                <div class="row">
                    <div class="col-lg-10 mt-3">
                        <h4 style="color: #D77409">
                            <i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 20px"></i><a class="text-reset" style="text-decoration:none;"><b>Pick Up Address</b></a>
                        </h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 mt-2" style="margin-left:35px; font-weight:600;">
                        <p>{{$ts->alamat}}</p>
                    </div>
                </div>
                
                {{-- maps --}}
                <div class="row">
                    <div class="col-lg-10">
                        <h4 style="color: #D77409">
                            <i class="fa fa-map" aria-hidden="true" style="margin-right: 16px"></i><a class="text-reset" style="text-decoration:none;"><b>Google Maps</b></a>
                        </h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 mt-2 mb-3" style="margin-left:35px; font-weight:600;">
                        <a href="https://www.google.com/maps/?hl=ID" target="_blank">Click here</a>
                    </div>
                </div>

            </div>   
        </div>

        {{-- Contact Customer --}}
        <div class="mt-4" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px; font-family: 'Segoe UI', Arial, sans-serif;">
            <h4 style="color: #D77409; margin-left:20px; margin-bottom:24px; margin-top: 16px;"> 
                <i class="fa fa-user" aria-hidden="true" style="margin-right: 16px"></i><a class="text-reset" style="text-decoration:none;"><b>Contact Customer</b></a>
            </h4>

            <div style="margin-left: 55px;margin-right:40px;">
                <div class="mb-3">
                    <label for="weightm" class="form-label"><b>Customer Name</b></label>
                    <p>{{$ts->user->name}}</p>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label"><b>Customer Number</b></label>
                    <p>{{$ts->user->telepon}}</p>
                </div>
                <div class="mb-3">
                    <label for="weight" class="form-label"><b>Chat with Customer</b></label>
                    <p style="color: rgb(7, 166, 7)"><i class="fa fa-whatsapp" aria-hidden="true" style="margin-right: 10px"></i><a class="text-reset" href="https://wa.me/081911111111" style="text-decoration:none;" target="_blank">Whatsapp</a></p>
                </div>
            </div>

        </div>

        {{-- Detail Item Estimation --}}
        <div class="mt-4" style="border-style:solid; border-width:1px; border-color: #F58814;border-radius: 10px; padding:10px; font-family: 'Segoe UI', Arial, sans-serif;">
            <h4 style="color: #D77409; margin-left:20px; margin-bottom:24px; margin-top: 16px;"> 
                <i class="fa fa-balance-scale" aria-hidden="true" style="margin-right: 16px"></i><a class="text-reset" style="text-decoration:none;"><b>Detail Item Estimation</b></a>
            </h4>

            <div style="margin-left: 55px;margin-right:40px;">
                <div class="mb-3">
                    <label for="weightm" class="form-label"><b>Weight Measure</b></label>
                    <p>{{$ts->tipeweight}}</p>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label"><b>Item Descirption</b> (Ex : TV, paper, etc)</label>
                    <p>{{$ts->items}}</p>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label"><b>Weight</b> (more or less)</label>
                    <p>{{$ts->weight}}</p>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label"><b>Payment</b></label>
                    <p>{{$ts->payment}}</p>
                </div>
            </div>
            
        </div>

        

        {{-- Button --}}
        <div class="d-grid gap-2 d-md-flex justify-content-md-end " style="margin-top: 30px; margin-bottom: 5%;  padding-bottom: 2%">
            <a href="{{route('trackingalamat.arrive', $ts->id)}}" class="btn p-2 bd-highlight" style="font-weight: 600; background-color:#F58814;color:white;border-radius:7px 7px 7px 7px;width:15rem;">ARRIVE</a>
        </div>
        @endforeach


@endsection